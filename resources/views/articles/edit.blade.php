@extends('layouts.app', ['pageTitle'=> 'Editer l\'article'])
@section('content')
    <h1>Éditer l'article n°{{$post->id}}</h1>
    {{--{!! Form::model($post, array('route' => ['articles.update',$post->id], 'method' => 'PUT')) !!}
        {{csrf_field()}}

        {!! Form::select('user_id',$users, $post->user_id, ['class' => 'form-control']) !!}
        {!! Form::label('name_du_champs', 'titre') !!}
        <div class="form-group">
            {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
        </div>

        <div class="form-group">
            {!! Form::textarea('description', null ,['class'=>'form-control', 'maClasse', 'placeholder'=>'', 'Mon champs']) !!}
        </div>
        {!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

        {!! Form::close() !!}--}}
    @include('partials.articles.form', ['action' => 'edit']);
    @include('partials.articles.errors');
@endsection
