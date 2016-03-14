@extends('layouts.app', ['pageTitle'=> 'Mon profile'])
@section('content')

    {!! Form::model($user, array('route' => ['profil.update',$user->id], 'method' => 'PUT')) !!}
    {{csrf_field()}}

    {!! Form::label('name_du_champs', 'Nom') !!}
    <div class="form-group">
        {!! Form::text('name', $user->name, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {!! Form::label('name_du_champs', 'Prenom') !!}
    <div class="form-group">
        {!! Form::text('firstname', $user->firstname, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {!! Form::label('name_du_champs', 'Email') !!}
    <div class="form-group">
        {!! Form::text('email', $user->email, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {!! Form::label('name_du_champs', 'Mot de passe') !!}
    <div class="form-group">
        {!!Form::password('password', array('class' => 'form-control', 'placeholder'=> '***********'))!!}
    </div>
{!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

    {!! Form::close() !!}

@endsection