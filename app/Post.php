<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillable
    protected $fillable = ['title', 'content', 'slug'];

    //dico che si riferisce ad una category
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
