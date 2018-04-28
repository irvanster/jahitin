<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saran;
class BackController extends Controller
{

    public function dashboard()
    {
        return view('back.dashboard');
    }
}
