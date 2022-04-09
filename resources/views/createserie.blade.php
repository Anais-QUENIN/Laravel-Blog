@extends('layouts/admin')


@section('content')
<h1>Ajouter une nouvelle série : </h1>

 <form method = "POST" action = "/admin/series" enctype="multipart/form-data">
 @csrf
 <div>
 <input type="text" name="title" placeholder="Titre">
 </div>
 <div>
 <input type="text" name="auteur" placeholder="Nom de l'auteur">
 </div>
 <div>
 <textarea name="content" placeholder="Description"></textarea>
 </div>
 <div>
 <textarea name="acteurs" placeholder="Acteurs"></textarea>
 </div>
 <div>
 <textarea name="url" placeholder="URL"></textarea>
 </div>
 <div>
<span> Image : </span>
 <input type="file" name="fichier">  
</div> 
<div>
<span> Vidéo : </span>
 <input type="file" name="fichier2">  
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


