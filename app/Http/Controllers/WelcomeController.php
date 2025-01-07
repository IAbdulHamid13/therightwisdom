<?php

namespace App\Http\Controllers;

use App\Models\slideshow;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliders = slideshow::get();
        return view('welcome', compact('sliders'));
    }
}
