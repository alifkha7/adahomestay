<?php

namespace App\Http\Controllers;

class RoomController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard-rooms');
    }

    public function details()
    {
        return view('pages.dashboard-room-details');
    }

    public function create()
    {
        return view('pages.dashboard-room-create');
    }
}