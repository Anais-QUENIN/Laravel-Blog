@extends('layouts/main')

@section('content')

<h1>Bienvenue sur Series Passion ! </h1>

</br>

<h2> Dernières séries :</h2>



<ul>
    @foreach ($series as $serie)
    <li>
        <b>Titre : </b> <a href= "http://localhost:8000/series/{{$serie->id}}">  {{$serie->title}} </a> - <b>Auteur : </b> {{$serie->auteur}} 
       
</li>
@endforeach
</ul>


@endsection

