@extends('layouts.app', ['pageTitle'=> 'Mon profile'])
@section('content')

    <div>
        <p><b>Nom: </b>{{ $user->name }}</p>
        <p><b>Prénom: </b>{{ $user->firstname }}</p>
        <p><b>Email: </b>{{ $user->email }}</p>
        <p><b>Email: </b>**********</p>

    </div>

    <a href="{{route('profil.edit',$user->id)}}">
        <button>editer l'article</button>
    </a>



@endsection