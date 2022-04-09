<?php

namespace App\Http\Controllers;

class SeriesController extends Controller {

    function index() {
     //    return view('series');
    
      $series = \App\Models\Serie::all(); //affiche toutes les series
         return view('series',array(
         'series' => $series,
         
      
      ));

    
     
     
    }

    function show($id) {
      $serie = \App\Models\Serie::where('id',$id)->first(); 
      $comments = \App\Models\Comment::all()->where('serie_id',$id);
      return view('single',array( //Pass the serie to the view
     'serie' => $serie, 'comments' => $comments));
   }
   



}