
@extends('layouts.app', ['pageTitle'=> 'Creation d\'un article'])

@section('content')

    @include('partials.articles.form', ['action' => 'create'])
    @include('partials.articles.errors')

@endsection
