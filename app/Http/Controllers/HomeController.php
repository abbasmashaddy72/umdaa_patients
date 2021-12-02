<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        // $data2 = Doctor::with('department', 'locality', 'services')->get();
        // echo $data2;
        // exit();

        $data = Review::with('doctor')->take(10)->get();
        return view('welcome', compact('data'));
    }
}
