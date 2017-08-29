<?php

namespace App\Model;

use App\Core\App;

class Reservation
{
    protected $table = 'reservations';

    public function save()
    {
        $reservation = [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'contact_type' => $_POST['contact'],
            'contact' => ($_POST['contact'] === 'phone') ? $_POST['phone'] : $_POST['email'],
            'party_members' => $_POST['party_members'],
            'location' => $_POST['location'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
        ];

        App::get('database')->insert($this->table, $reservation);
    }

    public function fetchUsersReservations()
    {
        $contact_value = ($_POST['contact'] == 'phone') ? $_POST['phone'] : $_POST['email'];

        $reservations = [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'contact_type' => $_POST['contact'],
            'contact' => $contact_value
        ];

        return App::get('database')->fetchWhereEquals($this->table, $reservations);
    }

    public function remove()
    {
        $id = $_POST['id'];

        App::get('database')->removeById($this->table, $id);
    }
}