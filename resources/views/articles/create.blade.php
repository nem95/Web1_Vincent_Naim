
@extends('layouts.app', ['pageTitle'=> 'Creation d\'un article'])

@section('content')
{{--
    {!! Form::open(array('route' => 'articles.store',
    'method' => 'POST')) !!}
    {{csrf_field()}}

    {!! Form::select('user_id',$users, null, ['class' => 'form-control']) !!}
    {!! Form::label('name_du_champs', 'titre') !!}

    <div class="form-group">
    {!! Form::text('title', '', ['class'=> 'form-control', 'maClasse', 'placeholder'=> 'Titre de l\'article', 'Mon champs']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('content', '', ['class'=>'form-control', 'maClasse', 'placeholder'=>'Votre article', 'Mon champs']) !!}
    </div>
    {!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

    {!! Form::close() !!}

    --}}

    @include('partials.articles.form', ['action' => 'create']);
    @include('partials.articles.errors');
@endsection
