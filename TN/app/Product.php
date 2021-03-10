<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'directory_id','name_product','user_id','content','status',
    ];
}
