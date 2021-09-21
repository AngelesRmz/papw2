<?php

namespace PF_PAPW2\Http\Controllers;

use Illuminate\Http\Request;
use PF_PAPW2\category;
use PF_PAPW2\VideoM;

class upload extends Controller
{
    

    public function index()
    {
        //
        $categorias = category::All();
        return view('subirVideo')->with(compact('categorias'));
        //return $personas;
    }

    public function store(Request $request){
        return $request;
        
        $video = null;
        $videoPath = "";

        if($request->hasFile('Vid')){
             
            $video = $request->file('Vid');
                        
            // RUTA DONDE SE GUARDAN LAS IMAGENES
            //C:\xampp\htdocs\PF_PAPW2\storage\app\public\userPics 
            $video->store('public/videos');
            
            $videoPath = $video->hashName();
                        
        }

        $saveVid = new VideoM;
        $saveVid->title = $request->NomVid;
        $saveVid->path = $videoPath;
        $saveVid->image_video = 'tut1.png';
        $saveVid->id_category = $request->Cat;
        $saveVid->id_user = Auth::user()->id;
        $saveVid->save();

        return view('canalUsuario');
    }
}
