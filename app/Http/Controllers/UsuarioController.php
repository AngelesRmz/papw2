<?php

namespace PF_PAPW2\Http\Controllers;

use PF_PAPW2\Usuario;
use Illuminate\Http\Request;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = Usuario::All();
        return view('canalUsuario')->with(compact('usuarios'));
        //return $personas;
    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $avatar = null;
        $avatarPath = "";
        $portada = null;
        $portadaPath = "";

        

        if($request->hasFile('fileAvatar') && $request->hasFile('filePortada') ){
             
            $avatar = $request->file('fileAvatar');
            $portada = $request->file('filePortada');;
            
            // RUTA DONDE SE GUARDAN LAS IMAGENES
            //C:\xampp\htdocs\PF_PAPW2\storage\app\public\userPics 
            $avatar->store('public/userPics');
            $portada->store('public/userPics');

            $avatarPath = $avatar->hashName();
            $portadaPath = $portada->hashName();
            
        }
             

        $user = new Usuario;
        $user->nombre = $request->name;
        $user->apellidos = $request->AP;
        $user->username = $request->userName;
        $user->correo = $request->email;
        $user->pass = $request->pass;
        $user->fileAvatar = $avatarPath;
        $user->filePortada = $portadaPath;
        $user->save();

        return view('login');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
    }
    
}
