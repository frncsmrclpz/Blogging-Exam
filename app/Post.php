<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
}