<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts(){

        return $this->belongsTo('App\User');
    }
    public function post(){

        return $this->belongsTo('App\Models\Post');
    }
}
