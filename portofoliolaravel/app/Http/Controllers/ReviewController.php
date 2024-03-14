<?php

namespace App\Http\Controllers;

use App\Models\Review; 

class ReviewController extends Controller
{
    public function showReviews()
    {
        $reviews = Review::all(); // fetch reviews
        return view('welcome', compact('reviews')); // Pass data naar view
    }
}
