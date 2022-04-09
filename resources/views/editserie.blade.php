@extends('layouts/admin')

@section('content')
<h1>Modifier une série : </h1>

 <form method = "POST" enctype="multipart/form-data" action = {{route ('series.update', $serie->id)}}> 
@csrf
{{ method_field('PATCH') }}
 <div>
<span> Titre : </span>
 <input type="text" name="title" value= "{{$serie->title}}">
 </div>
 <span> Auteur : </span>  
 <div>
 <input type="text" name="auteur" value="{{$serie->auteur}}">
 </div>
 <div>
<span> Description : </span>  
 <textarea name="content">{{$serie->content}}</textarea>   <!-- mettre un truc qui permet de prendre la taille du texte -->
 </div>
 <div>
<span> Acteurs : </span>
 <textarea name="acteurs">{{$serie->acteurs}}</textarea>
 </div>
 <div>
<span> URL : </span>
 <textarea name="url">{{$serie->url}}</textarea>
 </div>
 <div>
<span>Image : </span>
<img src="/fichiers/{{ $serie->fichier }}" width="250px">
</div>
<div>
 <input type="file" name="fichier">  
</div> 
<span> Vidéo en format webm et mp4 : </span>
<video controls  src="/fichiers/{{ $serie->fichier2 }}" width="250px">
    <source src="/fichiers/{{ $serie->fichier2 }}" type = "video/webm">
    <source src="/fichiers/{{ $serie->fichier2 }}" type = "video/mp4">
</video>
 <input type="file" name="fichier2">  
</div> 
 <div>
 <input type="hidden" name="id" value= "{{$serie->id}}"> 
 </div>
 <div>
 <input type="submit" value = "Valider" name="submitButton">
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


