@extends('layouts.app', ['pageTitle'=> 'Mon profile'])
@section('content')

    {!! Form::model($user, array('route' => ['profil.edit',$user->id], 'method' => 'PUT')) !!}
    {{csrf_field()}}

    {!! Form::label('name_du_champs', 'Nom') !!}
    <div class="form-group">
        {!! Form::text('name', $user->name, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {!! Form::label('name_du_champs', 'Email') !!}
    <div class="form-group">
        {!! Form::text('Email', $user->email, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {!! Form::close() !!}
    <a href="{{route('profil.edit',$user->id)}}">
        <button>editer l'article</button>
    </a>

@endsection