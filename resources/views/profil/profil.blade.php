@extends('layouts.app', ['pageTitle'=> 'Mon profile'])
@section('content')

    <div>
        <p><b>Nom: </b>{{ $user->name }}</p>
        <p><b>Prénom: </b>{{ $user->firstname }}</p>
        <p><b>Email: </b>{{ $user->email }}</p>
        {{--Technique de creuvar pour faire comprendre que c'est le mot de passe qui est ici, en vraie on s'en fou car jamais on
        ne met le mdp en claire !!--}}
        <p><b>Email: </b>**********</p>
    </div>

    <a href="{{route('profil.edit',$user->id)}}">
        <button>editer mon profil</button>
    </a>

@endsection