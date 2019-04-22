<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsPageController extends Controller
{
    public function index() 
    {
        return view('events');
    }
    public function flisol() 
    {
        return view('events');
    }
}
