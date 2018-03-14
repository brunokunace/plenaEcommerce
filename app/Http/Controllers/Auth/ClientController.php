<?php

namespace App\Http\Controllers\Auth;

use App\Domains\Client\Model\Client;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ClientController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function register(Request $request)
    {
        $password = Hash::make($request->password);
        $user = Client::firstOrCreate([
            'password' => $password,
            'name' => $request->name,
            'email' => $request->email
        ]);
        if($user){
            Auth::login($user, true);
            return redirect($this->redirectTo);
        }
    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
        $provider_user = Socialite::driver($provider)->stateless()->user();

        $user = Client::firstOrCreate([
            'provider_id' => $provider_user->getId(),
            'name' => $provider_user->getName(),
            'email' => $provider_user->getEmail()
            ]);
        if($user){
            Auth::login($user, true);
            return redirect($this->redirectTo);
        }
    }
}
