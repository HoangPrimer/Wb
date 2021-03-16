<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
     protected $fillable = [
        'name_directory', 'category', 
    ];
    public function post(){
        return $this->hasMany('App\Post','directory_id','id');
    }
}
