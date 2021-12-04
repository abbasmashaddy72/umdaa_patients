<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Locality;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        // $doc_locations = Doctor::with('locality')->groupBy('locality_id')->get('locality_id');
        // $static_location = Locality::whereIn('city_id', [26, 71])->get();
        // $locations = $doc_locations->pluck('locality.id');
        // echo $locations;
        // exit();

        $data = Review::with('doctor')->take(10)->get();
        return view('welcome', compact('data'));
    }
}
