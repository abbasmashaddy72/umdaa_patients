<?php

namespace App\Http\Controllers;

use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $data = Review::with('doctor')->take(10)->get();
        return view('welcome', compact('data'));
    }
}
