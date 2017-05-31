<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;

class MainsController extends Controller
{
	  public function index()
    {
      return view('index');
    }

    public function indexuser()
    {
      return view('indexuser');
    }

    public function canchas()
    {
      return view('canchas');
    }

    public function agregarcanchas()
    {
      return view('agregarcanchas');
    }

    public function modificarcanchas()
    {
      return view('modificarcanchas');
    }

    public function eliminarcanchas()
    {
      return view('eliminarcanchas');
    }


    public function reservas()
    {
      return view('reservas');
    }
    public function reservasuser()
    {
      return view('reservasuser');
    }

    public function promociones()
    {
      return view('promociones');
    }
    public function agregarpromociones()
    {
      return view('agregarpromociones');
    }

    public function ganancias()
    {
      return view('ganancias');
    }
}
