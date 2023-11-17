<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected  $guarded = [];

    //RELACION MUCHOS A MUCHOS
    Public function recipes(){
        return $this->belongsToMany('App\Models\Recipe');
    }
}
