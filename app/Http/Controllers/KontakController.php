<?php

namespace App\Http\Controllers;

class KontakController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.kontak');
    }
}