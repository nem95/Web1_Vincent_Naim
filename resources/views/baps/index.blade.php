@extends('layouts.app', ['pageTitle'=> 'BAP'])
@section('content')
    <h1>Toutes les fiches BAP ici</h1>
    @if(Session::has('erreur'))
        <h1>  {{Session::get('erreur')}}</h1>
    @endif
    @foreach($bap as $baps)
        <a href="{{route('baps.show',$baps->id)}}">
            <div>
                <h2>{{$baps->title}}</h2>
                <p>{{$baps->description}}</p>
            </div>
        </a>
    @endforeach
@endsection