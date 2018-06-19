<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donut;

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
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $donuts = Donut::all();
            $data = [
                'donuts' => $donuts,
            ];
        }
        return view('donuts.index', $data);
    }
}
