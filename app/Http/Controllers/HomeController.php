<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desain;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_desain = Desain::orderBy('tanggal_post','DESC')->paginate(2);
        return view('front/home/index', compact('list_desain'));
    }

    public function listPenjahit()
    {
        return view('front/home/listPenjahit');
    }

    public function listDesainer()
    {
        return view('front/home/listDesainer');
    }

}
