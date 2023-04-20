<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Token;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Notifications\TelegramNotification;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/token';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'telegram_id' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User|\Illuminate\Http\RedirectResponse
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telegram_id' => $data['telegram_id'],
            'password' => Hash::make($data['password']),
        ]);

        Session::put('auth', [
            'user_id' => $user->id,
            'remember' => true,
        ]);

        return $user;
    }

    /**
     * @throws ValidationException
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $code = Token::generateCode($user);
        try {
            $user->notify(new TelegramNotification([
                'text' => "Hi " . $user->name . "\nWelcome to our website!\nYour code is: " . $code
            ]));
        } catch (\Exception $e){
            if($e->getCode() == 0){
                throw ValidationException::withMessages(['telegram_id' => 'Failed to connect to api.telegram.org, Check your connection and try again.']);
            } elseif ($e->getCode() == 400) {
                throw ValidationException::withMessages(['telegram_id' => 'Can not find chat ID, Please enter a correct ID.(To find your telegram ID use @myidbot)']);
            } else {
                throw ValidationException::withMessages(['telegram_id' => 'Something went wrong. Please try again later.']);
            }
        }
        /*
        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }*/

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }

}
