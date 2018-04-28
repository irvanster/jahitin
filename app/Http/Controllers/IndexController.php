<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function landing()
    {
        return view('front/landing');
    }
}
