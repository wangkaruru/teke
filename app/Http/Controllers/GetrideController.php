<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetrideController extends Controller
{
   public function tekeride()
   {
   	return view('tekeride');
   }

    public function findme()
   {
   	return view('findme');
   }

    public function terms()
   {
   	return view('terms');
   }

    public function privacypolicy()
   {
    return view('privacypolicy');
   }


   public function ridewithteke()
   {
    return view('ridewithteke');
   }

    public function nearestplace()
   {
    return view('nearestplace');
   }
}
