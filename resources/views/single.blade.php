@extends('layouts/main')

@section('content')

<h1>Titre de la série et auteur :</h1>
<p>{{$serie->title}} - {{$serie->auteur}}</p>

<h1>Description de la série :</h1>
<p>{{$serie->content}}</p>

<div>
<span>Image : </span>
<img src="/fichiers/{{ $serie->fichier }}" width="250px">
</div>

<div>
<span>Vidéo en format webm et mp4 : </span>
<video controls  src="/fichiers/{{ $serie->fichier2 }}" width="250px">
    <source src="/fichiers/{{ $serie->fichier2 }}" type = "video/webm">
    <source src="/fichiers/{{ $serie->fichier2 }}" type = "video/mp4">
</video>
</div>
<br>
<span> Commentaires : </span>
<ul>
    @foreach ($comments as $comment)  
    <li>
        <b>Pseudo : </b>  {{$comment->author_id}} - <b>Contenu:  </b> {{$comment->content}}
       </li>
@endforeach
</ul>
<form method="POST" action="/comment/create">  
@csrf
<div>
<input type="text" name="author_id" placeholder="Saisir pseudo">
</div>
<div>
<textarea name="content" placeholder="Saisir commentaire"></textarea>
</div>
<div>
 <input type="hidden" name="serie_id" value= "{{$serie->id}}"> 
 </div>
<div>
<input type="submit" value = "Envoyer" name="submitButton">
</div>
</form>
<br/>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

