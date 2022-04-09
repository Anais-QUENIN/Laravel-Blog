@extends('layouts/main')


@section('content')
<h1>Contacts</h1>

 <form method = "POST" action = "contact/create">
 @csrf
 <div>
 <input type="text" name="name" placeholder="Votre nom">
 </div>
 <div>
 <textarea name="email" placeholder="Votre email"></textarea>
 </div>
 <div>
 <textarea name="message" placeholder="Entrez un message"></textarea>
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
