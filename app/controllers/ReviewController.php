<?php

namespace App\Controller;

use App\Model\Review;

class ReviewController
{
    public function index()
    {
        return view('reviews');
    }

    public function create()
    {
        $review = new Review();
        $review->save();

        redirect('reviews');
    }
}