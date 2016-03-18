<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*protected $fillable = [
        'id', 'post_id', 'content',
    ];*/

    public function posts(){

        return $this->belongsTo('App\User');
        //utilisation: $user->posts
    }
    public function post(){

        return $this->belongsTo('App\Models\Post');
        //utilisation: $user->posts
    }
}
