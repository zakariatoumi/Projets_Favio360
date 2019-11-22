<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Tag;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listvideo= Video::all();
        return view('favio.admin',['videos'=>$listvideo]);
    }

    //Recuperer les donnees d'une video dans un formuler 
    public function edit($id){
        $video = Video::find($id);
        $listtag=Tag::all();
        return view('favio.edit',['v'=>$video,'tags'=>$listtag]);
    }

    //Permet de modifier les donnees d'une video
    public function update(Request $request,$id){
        $video = Video::find($id);
        $video->tag_id = $request->categorie;
        $video->description = $request->input('discription');
        $video->lien = $request->input('lien');
        $video->titre = $request->input('titre');
        $video->pseudo = $request->input('pseudo');

        $video->save();
        return redirect('home');
        
    }
    //Supprimer une video
    public function destroy(Request $request,$id){
        $v = Video::find($id);
        $v->delete();
        return redirect('home');
    }
    //Publication d'une video
    public function valide(Request $request,$id){
        $video = Video::find($id);
        $v = $request->input('exampleSwitch'.$video->id);

        if($v===null){
            $video->valide = 1;
        }else{
            $video->valide = 0;
        }
        $video->save();
        return redirect('home');
    }
    
}
