<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();
            if($user){
                auth()->loginUsingId($user->id);
                return redirect(route('home'));
            } else {
                return view('auth.register', ['name' => $googleUser->getName(), 'email' => $googleUser->getEmail()]);
            }
        } catch (\Exception $e){
            return back()->withErrors(['google'=>$e->getMessage()]);
        }
    }
}
