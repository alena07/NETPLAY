<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;

class MainsController extends Controller
{
    public function canchas()
    {
      return view('canchas');
    }

     public function reservas()
    {
      return view('reservas');
    }
}
