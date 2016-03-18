@extends('layouts.app', ['pageTitle'=> 'Contact' ])
@section('content')

    {!! Form::open(array('route' => 'contacts.store', 'method' => 'POST')) !!}
    {{csrf_field()}}


    {!! Form::label('mail', 'Votre Nom') !!}
    <div class="form-group">
        {!! Form::text('name', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> 'Nom', 'Mon champs']) !!}
    </div>

    {!! Form::label('mail', 'Adresse E-mail') !!}
    <div class="form-group">
        {!!Form::email('mail', $value = null, $attributes = array())!!}
    </div>

    {!! Form::label('mail', 'Votre message') !!}
    <div class="form-group">
        {!! Form::textarea('content', null ,['class'=>'form-control', 'maClasse', 'placeholder'=>'Votre message', 'Mon champs']) !!}
    </div>
    {!! Form::submit('Envoyer', ['class'=>'btn btn-success btn-block']) !!}

    {!! Form::close() !!}
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection