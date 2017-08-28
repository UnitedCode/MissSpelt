<?php

namespace App\Controller;

class ReservationController
{
    public function index()
    {
        return view('reservations/index');
    }

    public function create()
    {
        return view('reservations/create');
    }

    public function check()
    {
        return view('reservations/check');
    }
}