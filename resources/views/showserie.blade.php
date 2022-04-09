@extends('layouts/admin')

@section('content')
<h1>Titre de la série et auteur :</h1>
<p>{{$serie->title}}- {{$serie->auteur}} </p>
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
<input type="button" onclick="window.location.href = 'http://localhost:8000/delete/{{$serie->id}}';" value="Supprimer une série" /> 
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