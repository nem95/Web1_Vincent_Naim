@extends('layouts.app', ['pageTitle'=> $posts->title ])
@section('content')

    <h1>Article n.{{ $posts->id }}</h1>
    <h2>{{$posts->title}} <br>Auteurs:{{$posts->user->name}}</h2>
    <p>{{$posts->description}}</p>
    @if(Auth::check()&& Auth::User()->id == $posts->user_id || Auth::check() &&  Auth::User()->admin == 1 )
        <a href="{{route('articles.edit',$posts->id)}}">
            <button>editer l'article</button>
        </a>
        <form action="{{route('articles.destroy', $posts->id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button>Supprimer</button>
        </form>
    @endif
    {!! Form::open(array('route' => ['comment.store',$posts->id],'method' => 'POST')) !!}
    {{csrf_field()}}

    {!! Form::hidden('post_id', $posts->id) !!}
    {!! Form::label('name_du_champs', 'Commentaire') !!}
    <div class="form-group">
        {!! Form::text('content', '', ['class'=>'form-control', 'maClasse', 'placeholder'=>'Votre article', 'Mon champs']) !!}
    </div>
    <div class="col-md-6">
    {!! Form::submit('Commenter', ['class'=>'btn btn-block']) !!}
    </div>
    {!! Form::close() !!}

    @foreach($comments as $comment)
        <h3>{{$comment->content}}</h3>
        @if(Auth::check()&& Auth::User()->admin == 1)

            <form action="{{route('comment.destroy', $comment->id)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer</button>
            </form>
        @endif
    @endforeach
@endsection