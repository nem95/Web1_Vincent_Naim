@extends('layouts.app', ['pageTitle'=> 'Formulaire' ])
@section('content')
    {!! Form::open(array('route' => 'baps.store', 'method' => 'POST')) !!}
    {{csrf_field()}}
    {{-- Champ nom de la BAP--}}

    <div class="form-group col-md-12 ">
        {!! Form::label('name', 'Nom du projet') !!}
        {!! Form::text('title', null, ['class'=> 'form-control', 'maClasse',
        'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ nom client--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('Client', 'Nom') !!}
        {!! Form::text('name', null, ['class'=> 'form-control', 'maClasse',
        'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ prenom--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', ' Prenom ') !!}
        {!! Form::text('firstname', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ fonction--}}
    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'fonction du commanditaire du projet') !!}
        {!! Form::text('fonction', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ adresse--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Adresse postale') !!}
        {!! Form::text('adresse_client', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ e-mail--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Email') !!}
        {!! Form::text('email', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ telephone--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Telephone') !!}
        {!! Form::text('telephone', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ infos du contact ( nom prenom adresse email et telephone)--}}

    <div class="form-group col-md-12 ">
        {!! Form::label('name_du_champs', 'Nom et fonction du contact pour le suivi du projet avec etudiants ') !!}<br>
        {!! Form::label('name_du_champs', 'Nom & Prenom') !!}
        {!! Form::text('nom_prenom', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ adresse contact etudiant--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Adresse postale') !!}
        {!! Form::text('adresse_contact', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ e-mail contact etudiant--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Email') !!}
        {!! Form::email('mail_contact', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ telephone contact etudiant--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::label('name_du_champs', 'Telephone') !!}
        {!! Form::text('tel_contact', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    <div class="row">
    </div>

    {{-- Champ de description du projet --}}


    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'A propos de vous') !!}
        {!! Form::textarea('description', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>
    <div class="col-md-12"><h2>DESCRIPTION DU PROJET</h2><br></div>
    {{-- Champ site internet--}}
    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('site', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Site Internet  ') !!}
    </div>
    {{-- Champ 3d--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('three_d', 'value', false)!!}
        {!! Form::label('name_du_champs', '3D') !!}
    </div>
    {{-- Champ animation 2d--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('two_d', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Animation 2D') !!}
    </div>
    {{-- Champ installation multimedia--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('multi', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Installation Multimedia') !!}
    </div>
    {{-- Champ jeu video--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('jeux_video', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Jeu video') !!}
    </div>
    {{-- Champ DVD--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('dvd', 'value', false)!!}
        {!! Form::label('name_du_champs', 'DVD') !!}
    </div>
    {{-- Champ print--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('print', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Pint') !!}
    </div>
    {{-- Champ CD-ROM --}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('cd_rom', 'value', false)!!}
        {!! Form::label('name_du_champs', 'CD-ROM') !!}
    </div>
    {{-- Champ evenement--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('event', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Evenement') !!}
    </div>
    {{-- Champ autre--}}

    <div class="form-group col-md-6 col-xs-6">
        {!! Form::checkbox('autre', 'value', false)!!}
        {!! Form::label('name_du_champs', 'Autre ...') !!}
    </div>

    {{-- Champ La demande client avec un textarea si possible --}}

    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'CONTEXTE DE LA DEMANDE') !!}
        {!! Form::textarea('demande', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ contexte de la demande--}}

    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'VOTRE DEMANDE') !!}
        {!! Form::textarea('contexte', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ vos objectifs--}}

    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'VOS OBJECTIFS') !!}
        {!! Form::textarea('objectif', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {{-- Champ contraintes particulière et infos complementaires--}}

    <div class="form-group col-md-12">
        {!! Form::label('name_du_champs', 'CONTRAINTES PARTICULIERES EVENTUELLES
ET INFORMATIONS COMPLEMENTAIRES') !!}
        {!! Form::textarea('contrainte', null, ['class'=> 'form-control', 'maClasse', 'placeholder'=> '', 'Mon champs']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class'=>'btn btn-block']) !!}

    {!! Form::close() !!}

@endsection