@extends('layouts.app', ['pageTitle'=> $posts->title ])
@section('content')

    <h1>Article n.{{ $posts->id }}</h1>
    <h2>{{$posts->title}} <br>Auteurs:
    {{$posts->user->name}}</h2>
    <p>{{$posts->description}}</p>
    @if(Auth::check()&& Auth::User()->id == $posts->user_id || Auth::User()->admin == 1)
        <a href="{{route('articles.edit',$posts->id)}}">
            <button>editer l'article</button>
        </a>
        <form action="{{route('articles.destroy', $posts->id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button>Supprimer</button>
        </form>
    @endif



@endsection