@extends('layouts.app', ['pageTitle'=> $bap->title])
@section('content')
    <div>
        <h2>{{$bap->title}}</h2>
        <p>
            @if($bap->validate == 1)
                BAP Valide
            @else
                BAP Refuse
            @endif
        </p>
        <p>{{$bap->description}}</p>
        <a href="{{route('baps.edit',$bap->id)}}">
            <button>Validation</button>
        </a>
    </div>

@endsection