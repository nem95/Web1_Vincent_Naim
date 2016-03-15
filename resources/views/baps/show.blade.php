@extends('layouts.app', ['pageTitle'=> $bap->title])
@section('content')
    <div>
        <h2>{{$bap->title}}</h2>
        <p>{{$bap->description}}</p>
        <a href="{{route('baps.edit',$bap->id)}}">
            <button>Validation</button>
        </a>
    </div>

@endsection