@extends('layouts/main')

@section('content')

<form id="recherche" method="POST" action= "/series" >
@csrf
<input name="saisie" type="text" placeholder="Rechercher série..." />

<input class="button" type="submit" value="Chercher"/>
 
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</br>


<ul>
    @foreach ($series as $serie)
    <li>
        <b>Titre : </b> <a href= "http://localhost:8000/series/{{$serie->id}}">  {{$serie->title}} </a> - <b>Auteur : </b> {{$serie->auteur}} 
       
</li>
@endforeach
</ul>




@endsection
