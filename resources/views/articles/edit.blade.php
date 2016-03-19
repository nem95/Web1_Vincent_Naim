@extends('layouts.app', ['pageTitle'=> 'Editer l\'article'])
@section('content')
    <h1>Éditer l'article n°{{$post->id}}</h1>
    @if(Auth::check())
        @if( Auth::User()->id == $post->user_id || Auth::User()->admin == 1 )
            @include('partials.articles.form', ['action' => 'edit']);
            @include('partials.articles.errors');
        @endif
    @endif
@endsection
