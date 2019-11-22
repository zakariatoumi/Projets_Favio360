<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Tag;
use App\Note;
class VideoController extends Controller
{
    
    //list top video
    public function topnew(){
        $topvideo= Video::orderBy('created_at', 'desc')->take(3)->get();
        $newvideo= Video::orderBy('created_at', 'desc')->take(5)->get();
        return view('favio.index',['tops'=>$topvideo,'news'=>$newvideo]);
    }
    //lister les videos
    public function index(){
        //$listvideo= Video::orderBy('note', 'desc')->take(3)->get();
        $listvideo= Video::where('valide',1)->get();
        $sport = Video::where([
            ['tag_id','=',1],
            ['valide','=',1]
        ])->get();
        $music = Video::where([
            ['tag_id','=',2],
            ['valide','=',1]
        ])->get();
        $nature = Video::where([
            ['tag_id','=',3],
            ['valide','=',1]
        ])->get();
        $culture = Video::where([
            ['tag_id','=',4],
            ['valide','=',1]
        ])->get();
        $techno = Video::where([
            ['tag_id','=',5],
            ['valide','=',1]
        ])->get();
        $doc = Video::where([
            ['tag_id','=',6],
            ['valide','=',1]
        ])->get();
        return view('favio.annuair',['videos'=>$listvideo,'sports'=>$sport,
        'musics'=>$music,'natures'=>$nature,'cultures'=>$culture
        ,'technos'=>$techno,'docs'=>$doc]);
    }
    //Affiche le formuler d'ajout de video
    public function create(){
        $listtag=Tag::all();
        return view('favio.internaut',['tags'=>$listtag]);
    }
    //Enregistrer une video
    public function store(Request $request){
        $video= new Video();
        $video->tag_id = $request->categorie;
        $video->description = $request->input('discription');   
        $lien=$request->input('lien');
        $lien=substr($lien, strpos($lien, "=") + 1); ;
        $video->lien = "https://www.youtube.com/embed/".$lien;
        $video->titre = $request->input('titre');
        $video->pseudo = $request->input('pseudo');
        
        $video->save();
        return redirect('/');
    }
    //Recuperer les donnees d'une video dans un formuler 
    public function edit(){

    }
    //Permet de modifier les donnees d'une video
    public function etoile(Request $request,$id){
        $etoile = new Note();
        $etoile->video_id = $id;
        $etoile->note=$request->input('etoile1');
        $etoile->save();
        return redirect('detail/'.$id);
    }
    //Supprimer une video
    public function destroy(){

    }
    //details video

   public function voir($id){
    $Ds = Video::find($id);
    $notes = Note::where('video_id',$id)->get();
    $m = $notes->avg('note');
    $m = round($m);
    $tout=Video::where('tag_id',$Ds->tag_id)->get();
     return view('favio.det',['vu'=>$Ds,'videoc'=>$tout,'notes'=>$notes,'m'=>$m]);
      
    }


    //recherche
    public function show(Request $request){
        $q = $request->input('q');
    $user = Video::where('titre','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('favio.recherche')->withDetails($user)->withQuery ( $q );
    else return view ('favio.recherche')->withMessage('No Details found. Try to search again !'); 
    }


}
