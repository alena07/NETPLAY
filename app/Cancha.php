<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $table = "canchas";

    protected $fillable = ['numeroCancha', 'img', 'estado'];

}
