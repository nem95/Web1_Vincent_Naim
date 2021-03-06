@extends('layouts.app', ['pageTitle'=> 'Les articles'])
@section('content')

    @if(Session::has('erreur'))
        <h1>  {{Session::get('erreur')}}</h1>
    @endif
    <a href="{{route('articles.create')}}">
        <div class="btn btn-default "> <span class="fa fa-plus"></span> New article</div>
    </a>
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p class="col-md-12">{{$post->description}}</p>
        <a href="{{route('articles.show',$post->id)}}">
            <button>Voir l'article</button>
        </a>
    @endforeach

@endsection