@extends('layouts.app', ['pageTitle'=> 'Editer l\'article'])
@section('content')
    <h1>Editer la BAP: {{$bap->name}}</h1>
    {!! Form::model($bap, array('route' => ['baps.update',$bap->id], 'method' => 'PUT')) !!}
        {{csrf_field()}}

        {{ Form::hidden('validate', '1') }}
        <div class="col-md-6">
        {!! Form::submit('Valider', ['class'=>'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::model($bap, array('route' => ['baps.update',$bap->id], 'method' => 'PUT')) !!}
    {{csrf_field()}}

        {{ Form::hidden('validate', '0') }}

        <div class="col-md-6">
        {!! Form::submit('Refuser', ['class'=>'btn btn-danger btn-block']) !!}
        </div>
    {!! Form::close() !!}
@endsection