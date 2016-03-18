<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        //dd();
        return $this->belongsTo('App\User');
    }

    public function comments(){
        //dd($this->belongsTo('App\Models\Comment'));
        return $this->hasMany('App\Models\Comment');
        //return $this->belongsTo();
    }
}
