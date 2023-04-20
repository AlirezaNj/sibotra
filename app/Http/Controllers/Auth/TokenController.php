<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Notifications\TelegramNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class TokenController extends Controller
{
    public function index(){
        return view('auth.verify');
    }

    public function sendToken(){
        if(! Session::has('auth')) {
            return response()->json(array('answer'=>'error' , 'message'=>'please try again' , 200));
        }
        $user = User::find(Session::get('auth.user_id'));

        $code = Token::generateCode($user);
        try {
            $user->notify(new TelegramNotification([
                'text' => "Hi " . $user->name . "\nWelcome to our website!\nYour code is: " . $code
            ]));
        } catch (\Exception $e){
            if($e->getCode() == 0){
                return back()->withErrors(['telegram_id' => 'Failed to connect to api.telegram.org, Check your connection and try again.']);
            } elseif ($e->getCode() == 400) {
                return back()->withErrors(['telegram_id' => 'Can not find chat ID, Please enter a correct ID.(To find your telegram ID use @myidbot)']);
            } else {
                return back()->withErrors(['telegram_id' => 'Something went wrong. Please try again later']);
            }
        }

        return redirect(route('token'));
    }

    public function verifyToken(Request $request){
        if(! $request->session()->has('auth')) {
            return response()->json(array('answer'=>'error' , 'message'=>'please try again' , 200));
        }

        $user = User::findOrFail($request->session()->get('auth.user_id'));
        $status = Token::verifyCode($request->token , $user);

        if($status){
            $user->token()->delete();
            $user->update([
                'telegram_verified_at' => Carbon::now()
            ]);

            $user->notify(new TelegramNotification([
                'text' => "Your account successfully verified."
            ]));

            if(auth()->loginUsingId($user->id, $request->session()->get('auth.remember'))) {
                $request->session()->forget('auth');
            }
        }

        return redirect(route('home'));
    }
}
