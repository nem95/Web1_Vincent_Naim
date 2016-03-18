@extends('layouts.app', ['pageTitle'=> 'BAP'])
@section('content')
    <h1>Toutes les fiches BAP ici</h1>
    @if(Session::has('erreur'))
        <h1>  {{Session::get('erreur')}}</h1>
    @endif


                @foreach($bap as $baps)
                    @if($users->admin == 1)
                        <a href="{{route('baps.show',$baps->id)}}">
                            <div>
                                <div class="col-md-4 ">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"> <h4>{{$baps->title}}</h4></div>
                                        <div class="panel-body">
                                            <p>{{$baps->description}}</p>
                                            @if($baps->validate == 1)
                                                <p class="validate"> <span class="fa fa-check">  BAP Valide </span> </p>
                                            @else
                                                <p class="refuse"> <span class="fa fa-times">  BAP Refuse </span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @elseif($users->admin != 1)
                        <div>
                            <div class="col-md-4 ">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <h4>{{$baps->title}}</h4></div>
                                    <div class="panel-body">
                                        <h2>{{$baps->title}}</h2>
                                        <p>{{$baps->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



@endsection