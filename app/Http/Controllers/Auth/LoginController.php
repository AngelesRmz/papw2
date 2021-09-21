<?php

namespace PF_PAPW2\Http\Controllers\Auth;

use Illuminate\Http\Request;
use PF_PAPW2\Usuario;
use Auth;
use PF_PAPW2\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/Inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function username()
    {
        $login = request()->input('identity');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => $login]);

        return $field;
    }

    protected function validateLogin(Request $request)
    {
        $messages = [
            'identity.required' => 'Email or username cannot be empty',
            'email.exists' => 'Email or username already registered',
            'username.exists' => 'Username is already registered',
            'password.required' => 'Password cannot be empty',
        ];

        $request->validate([
            'identity' => 'required|string',
            'password' => 'required|string',
            'email' => 'string|exists:users',
            'username' => 'string|exists:users',
        ], $messages);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/land');
    }
   

    // public function username()
    // {
    //     $loginType = request()->input('identity');
    //     $field = filter_var($loginType, FILTER_VALIDATE_EMAIL) ? 'correo' : 'username';
    //     request()->merge([$field => $loginType]);

    //     return $field;
    //     // return 'name';
    // }

    // protected function validateLogin(Request $request)
    // {
    //     $messages = [
    //         'identity.required' => 'Email or username cannot be empty',
    //         'correo.exists' => 'Email or username already registered',
    //         'username.exists' => 'Username is already registered',
    //         'pass.required' => 'Password cannot be empty',
    //     ];

    //     $request->validate([
    //         'identity' => 'required|string',
    //         'pass' => 'required|string',
    //         'correo' => 'string|exists:usuarios',
    //         'username' => 'string|exists:usuarios',
    //     ], $messages);
    // }
    // public function login(){

    //     $credentials = $this->validate(request(), [
    //         'username' => 'required|string',
    //         'pass' => 'required|string'
    //     ]);

        
    //     if(Auth::attempt($credentials)){
    //         return 'Tu sesión ha iniciado correctamente';
    //     }

        
    //     return back()
    //         ->withErrors([
    //             'pass' => trans('auth.failed'),
    //             'username'=>trans('auth.failed')
    //             ])
    //         ->withInput(
    //             request(['username']),
    //             request(['pass'])
    //         );

    //     // return $credentials;
    // }

   
}
