<?php

namespace App\Http\Controllers\Auth;

use App\Common\Repository\Repository;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('user');
    }

    protected function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::guard('user')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)){
            return redirect()->intended(route('admin.home.index'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    protected function logout(Request $request)
    {
        Auth::guard('user')->logout();
        return redirect($this->redirectTo);
    }
}
