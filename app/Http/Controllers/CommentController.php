<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use \App\Models\Comment;

class CommentController extends Controller {

    function store(Request $request)
    {    
        $validated = $request->validate([
            'author_id' => 'required|filled',
            'content' => 'required|filled',
            'serie_id' => 'required|filled',
        ]);

        $comment = new Comment(); //on instancie un nouveau comm
        $comment->author_id = request('author_id'); //on set le titre avec la donnée envoyée du formulaire
        $comment->serie_id = request('serie_id');
        $comment->content = request('content');
        $comment->save(); 

        return redirect('');
        
    }



}


