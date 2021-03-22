<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
            'directory_id','user_id','name_post','content','price','public','status'
    ];

    public function directory(){
        return $this->belongsTo('App\Directory','directory_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','post_id','id');
    }

    public function image(){
        return $this->hasMany('App\Image','post_id','id');
    }
}
