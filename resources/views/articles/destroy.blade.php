@extends('layouts.app')
@section('content')

    <h1>Article n.{{ $posts->id }}</h1>

    <button><a href="{{route('articles.destroy',
        $posts->id)}}">Supprimer</a></button>

    <h2>{{$posts->title}} <br>Auteurs:
        {{$posts->user->name}}</h2>
    <p>{{$posts->description}}</p>



@endsection