@extends('layouts/main')

@section('content')

<form id="recherche" method="POST">
 
<input name="saisie" type="text" placeholder="Rechercher série..." required />

</br>

<ul>
    @foreach ($series as $serie)
    <li>
        <b>Titre : </b> <a href= "http://localhost:8000/series/{{$serie->id}}">  {{$serie->title}} </a> - <b>Auteur : </b> {{$serie->auteur}} 
       
</li>
@endforeach
</ul>

</br>

<input class="button" type="submit" value="Chercher" />
 
</form>


<!--<h1> Liste des séries :</h1> -->

@endsection