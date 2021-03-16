<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function directory(){
        return $this->belongsTo('App\Directory','directory_id','id');
    }
    public function image(){
        return $this->hasMany('App\Image','post_id','id');
    }
    public function comment(){
        return $this->hasMany('App\Comment','post_id','id');
    }
}
