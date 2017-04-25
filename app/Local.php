<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cancha;

class Local extends Model
{
    protected $table = "departamentos";

    protected $fillable = ['codigo', 'nombre'];

    // Relacion uno a muchos con municipios
    public function municipios()
    {
        return $this->hasOne('App\Cancha');
    }
}
