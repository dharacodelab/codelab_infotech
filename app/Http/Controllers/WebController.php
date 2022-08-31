<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('services');
    }
}
