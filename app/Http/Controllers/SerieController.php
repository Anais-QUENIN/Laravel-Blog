<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Serie;
use \App\Models\User;
use Illuminate\Support\Facades\Storage;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = \App\Models\Serie::all(); //affiche toutes les series
        return view('seriesadmin',array(
        'series' => $series,

        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('createserie');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {
        $validated = $request->validate([
            'title' => 'required|filled',
            'content' => 'required|filled',
            'acteurs' => 'required|filled',
            'auteur' => 'required|filled',
            'url' => 'required|filled',
            'fichier' => 'required',
            'fichier2' => 'required',
         ]);
          
        
        
         $serie = new Serie(); //on instancie une nouvelle serie
         $serie->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
         $serie->content= request('content');
         $serie->acteurs = request('acteurs');
         $serie->auteur = request('auteur');
         $serie->status = 'published';
         $serie->created_at = date('y-m-d h:i:s');
         $serie->updated_at = date('y-m-d h:i:s');
         $serie->url = request('url');
         $serie->author_id = 2;
       
         if ($fichier = $request->file('fichier')) {
            $dest = 'fichiers/';
            $nom = date('YmdHis') . "." . $fichier->getClientOriginalExtension();
            $fichier->move($dest, $nom);
            $serie->fichier = $nom; 
          }
          if ($fichier2 = $request->file('fichier2')) {
            $dest2 = 'fichiers/';
            $nom2 = date('YmdHis') . "." . $fichier2->getClientOriginalExtension();
            $fichier2->move($dest2, $nom2);
            $serie->fichier2 = $nom2; 
          }
         $serie->save(); // on enregistre dans la base




    
     
        return redirect('');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = \App\Models\Serie::where('id',$id)->first(); 
     
        return view('showserie',array( //Pass the serie to the view
       'serie' => $serie
    ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = \App\Models\Serie::where('id',$id)->first();
        return view('editserie', array('serie' => $serie, 'id'=>$id));  

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|filled',
            'content' => 'required|filled',
            'acteurs' => 'required|filled',
            'url' => 'required|filled',
         ]);
        
        
        
        
         $serie = Serie::find(request('id'));
         $serie->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
         $serie->content= request('content');
         $serie->auteur= request('auteur');
         $serie->acteurs = request('acteurs');
         $serie->status = 'published';
         $serie->updated_at = date('y-m-d h:i:s');
         $serie->url = request('url');
         if ($fichier = $request->file('fichier')) {
            $dest = 'fichiers/';
            $nom = date('YmdHis') . "." . $fichier->getClientOriginalExtension();
            $fichier->move($dest, $nom);
            $serie->fichier = $nom; 
          }
          if ($fichier2 = $request->file('fichier2')) {
            $dest2 = 'fichiers/';
            $nom2 = date('YmdHis') . "." . $fichier2->getClientOriginalExtension();
            $fichier2->move($dest2, $nom2);
            $serie->fichier2 = $nom2; 
          }
         $serie->save(); // on enregistre dans la base

     
        return redirect('');
    }

    public function delete($id)
    {
        $serie = \App\Models\Serie::where('id',$id)->first();
        return view('admindelete', array('serie' => $serie, 'id'=>$id));  


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $serie = Serie::find(request('id'));
        $serie->delete(); 

 
        return redirect(''); 
    }
}
