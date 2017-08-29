<?php

namespace App\Model;

use App\Core\App;

class Review
{
    protected $table = 'reviews';

    public function save()
    {
        $review = [
          'firstname' => $_POST['firstname'],
          'lastname' => $_POST['lastname'],
          'rating' => $_POST['rating'],
          'review' => $_POST['review']
        ];

        App::get('database')->insert($this->table, $review);
    }
}