@extends('layouts.app', ['pageTitle'=> 'Editer l\'article'])
@section('content')
    <h1>�diter l'article n�{{$post->id}}</h1>

    @include('partials.articles.form', ['action' => 'edit']);
    @include('partials.articles.errors');
@endsection
