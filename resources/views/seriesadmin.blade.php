@extends('layouts/admin')

@section('content')
<h1> Liste des séries :</h1>


<ul>
    @foreach ($series as $serie)
    <li>
        <b>Titre : </b> <a href= "http://localhost:8000/admin/series/{{$serie->id}}">  {{$serie->title}} </a> - <b>Auteur : </b> {{$serie->auteur}} <input type="button" onclick="window.location.href = 'http://localhost:8000/admin/series/{{$serie->id}}/edit';" value="Modifier une série" /> <input type="button" onclick="window.location.href = 'http://localhost:8000/delete/{{$serie->id}}';" value="Supprimer une série" /> 
       
</li>

@endforeach
</ul>
<div>
<input type="button" onclick="window.location.href = 'http://localhost:8000/admin/series/create';" value="Créer une série" />
</div>
@endsection