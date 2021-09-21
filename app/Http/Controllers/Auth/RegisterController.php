<?php

namespace PF_PAPW2\Http\Controllers\Auth;

use PF_PAPW2\User;
use Illuminate\Http\Request;
use PF_PAPW2\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/home';
   
    private $avatarPath = "";
    private $portadaPath = "";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('registro');
    }

   
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        

        if($request->hasFile('fileAvatar') && $request->hasFile('filePortada') ){
             
            $avatar = $request->file('fileAvatar');
            $portada = $request->file('filePortada');;
            
            // RUTA DONDE SE GUARDAN LAS IMAGENES
            //C:\xampp\htdocs\PF_PAPW2\storage\app\public\userPics 
            $avatar->store('public/userPics');
            $portada->store('public/userPics');

            $this->avatarPath = $avatar->hashName();
            $this->portadaPath = $portada->hashName();

            
        }
          
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
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
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:6', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'confirmed'],
            'fileAvatar' => ['required', 'file'],
            'filePortada' => ['required', 'file'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \PF_PAPW2\User
     */
    protected function create(array $data)
    {
            return User::create([
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'fileAvatar' => $this->avatarPath,
                'filePortada' => $this->portadaPath,
            ]);
        
     
        
    }
}
