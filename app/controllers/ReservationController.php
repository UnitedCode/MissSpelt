<?php

namespace App\Controller;

use App\Model\Reservation;

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

    public function store()
    {
        $reserve = new Reservation();
        $reserve->save();

        redirect('');
    }

    public function check()
    {
        return view('reservations/check');
    }

    public function view()
    {

    }
}