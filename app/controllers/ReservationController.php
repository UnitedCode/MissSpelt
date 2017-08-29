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
        $reservation = new Reservation();
        $reservation->save();

        redirect('/reservations');
    }

    public function check()
    {
        return view('reservations/check');
    }

    public function view()
    {
        $reservation = new Reservation();
        $usersReservations = $reservation->fetchUsersReservations();

        return view('reservations/show', ['reservations' => $usersReservations]);
    }

    public function destroy()
    {
        $reservation = new Reservation();
        $reservation->remove();

        redirect('reservations/check');
    }
}