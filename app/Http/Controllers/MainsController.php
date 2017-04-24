<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;

class MainsController extends Controller
{
    public function index()
    {
      $canchas = Cancha::orderBy('numeroCancha', 'asc')->get(); 
      return view('canchas')->with(['canchas'=>$canchas]);
    }
}
