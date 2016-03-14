<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('name');
            $table->string('firstname');
            $table->string('fonction');
            $table->string('adresse_client');
            $table->string('email');
            $table->string('telephone');
            $table->string('nom_prenom');
            $table->string('adresse_contact');
            $table->string('mail_contact');
            $table->string('tel_contact');
            $table->longText('description');
            $table->boolean('site');
            $table->boolean('3d');
            $table->boolean('2d');
            $table->boolean('multi');
            $table->boolean('jeux_video');
            $table->boolean('dvd');
            $table->boolean('print');
            $table->boolean('cd_rom');
            $table->boolean('event');
            $table->boolean('autre');
            $table->longText('demande');
            $table->longText('contexte');
            $table->longText('objectif');
            $table->longText('contrainte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bap');
    }
}
