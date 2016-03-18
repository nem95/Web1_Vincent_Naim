@extends('layouts.app', ['pageTitle'=> $bap->title])
@section('content')
    <div>
        <h2>{{$bap->title}}</h2>

        @if($bap->validate == 1)
            <p class="validate"> <span class="fa fa-check">  BAP Valide </span> </p>
        @else
            <p class="refuse"> <span class="fa fa-close">  BAP Refuse </span></p>
        @endif

        <p>{{$bap->description}}</p>
        <a href="{{route('baps.edit',$bap->id)}}">
            <button>Validation</button>
        </a>
    </div>

@endsection