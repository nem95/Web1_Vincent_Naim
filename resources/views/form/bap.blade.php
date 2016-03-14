@extends('layouts.app', ['pageTitle'=> 'Formulaire' ])
@section('content')
    {{--{!! Form::open(array('route' => 'form.store', 'method' => 'POST')) !!}--}}
    {{csrf_field()}}
    {{-- Champ nom de la BAP--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('titre', 'Nom du projet') !!}
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ nom client--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('Client', 'Nom') !!}
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse',
        'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ prenom--}}
    {!! Form::label('name_du_champs', ' Prenom ') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ fonction--}}
    {!! Form::label('name_du_champs', 'fonction du commanditaire du projet') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ adresse--}}
    {!! Form::label('name_du_champs', 'Adresse postale') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ e-mail--}}
    {!! Form::label('name_du_champs', 'Email') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ telephone--}}
    {!! Form::label('name_du_champs', 'Téléphone') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ infos du contact ( nom prenom adresse email et telephone)--}}
    {!! Form::label('name_du_champs', 'Nom et fonction du contact pour le suivi du projet avec étudiants ') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ adresse contact etudiant--}}
    {!! Form::label('name_du_champs', 'Adresse postale') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ e-mail contact etudiant--}}
    {!! Form::label('name_du_champs', 'Email') !!}
    <div class="form-group">
        {!! Form::email('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ telephone contact etudiant--}}
    {!! Form::label('name_du_champs', 'Téléphone') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ de description du projet --}}
    {{-- Champ site internet--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ 3d--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ animation 2d--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ installation multimedia--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ jeu video--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ DVD--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ print--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ CD-ROM --}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ evenement--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    {{-- Champ autre--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ La demande client avec un textarea si possible --}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ contexte de la demande--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ vos objectifs--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ contraintes particulière et infos complementaires--}}
    {!! Form::label('name_du_champs', 'titre') !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('description', null ,['class'=>'form-control', 'maClasse', 'placeholder'=>'', 'Mon champs']) !!}
    </div>
    {!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

    {!! Form::close() !!}

@endsection