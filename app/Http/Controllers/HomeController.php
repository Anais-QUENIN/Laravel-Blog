<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {

        $series = \App\Models\Serie::latest()->take(3)->get(); //get latest 3 series
         return view('welcome',array(
         'series' => $series,
        ));
    }
}
