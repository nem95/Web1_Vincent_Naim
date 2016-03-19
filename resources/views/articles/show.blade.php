@extends('layouts.app', ['pageTitle'=> $posts->title ])
@section('content')

    <h1>{{$posts->title}}</h1> <br>
    <p>Auteurs: <b>{{$posts->user->name}}</b> </p>
    <p>{{$posts->description}}</p>
    @if(Auth::check())
        @if( Auth::User()->id == $posts->user_id || Auth::User()->admin == 1 )
            <a href="{{route('articles.edit',$posts->id)}}">
                <button class="col-md-2 btn btn-default"> editer l'article </button>
            </a>
            <form action="{{route('articles.destroy', $posts->id)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="col-md-offset-1 col-md-2 btn btn-danger"> Supprimer l'article</button>
            </form>
        @endif
    @endif
    {!! Form::open(array('route' => ['comment.store',$posts->id],'method' => 'POST')) !!}
    {{csrf_field()}}

    <div class="col-md-12">
        {!! Form::hidden('post_id', $posts->id) !!}
        {!! Form::label('name_du_champs', 'Commentaire') !!}
        <div class="form-group">
            {!! Form::text('content', '', ['class'=>'form-control', 'maClasse', 'placeholder'=>'Votre article', 'Mon champs']) !!}
        </div>
        <div class="col-md-6">
        {!! Form::submit('Commenter', ['class'=>'btn btn-block']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    @foreach($comments as $comment)
       <div class="col-md-12">
           <div class="col-md-10"><h4>{{$comment->content}}</h4></div>
           <div class="col-md-2 ">
           @if(Auth::check()&& Auth::User()->admin == 1)

               <form action="{{route('comment.destroy', $comment->id)}}" method="post">
                   {{csrf_field()}}
                   <input type="hidden" name="_method" value="DELETE">
                   <button class="btn btn-danger">Supprimer</button>
               </form>
           @endif
           </div>
       </div>

    @endforeach
@endsection