@extends('layouts.app', ['pageTitle'=> $bap->title])
@section('content')
    <div>
        <h2>{{$bap->title}}</h2>
        <p>{{$bap->description}}</p>
    </div>

@endsection