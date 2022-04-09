@extends('layouts/admin')

@section('content')
<h1>Confirmez-vous la suppression de la série :</h1>
<p>{{$serie->title}}</p>

<form method = "POST" action = {{route ('series.destroy', $serie->id)}}">
@csrf
@method("DELETE")
 <input type="submit" value = "Supprimer la série" name="submitButton">
 <input type="hidden" name="id" value= "{{$serie->id}}"> 
</form>
<br/>
<input type="button" onclick="window.location.href = 'http://localhost:8000/admin/series';" value="Retour" /> 
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