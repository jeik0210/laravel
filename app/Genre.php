<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genres";
    //asigna los elmentos que pueden ser rellenados
    protected $fillable = ['genre'];
}