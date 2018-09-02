<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }
    
    public function getMenu(){
      return view('menu');
    }

    public function getReservations(){
      return view('reservations');
    }
}
