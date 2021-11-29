<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Locality;
use Illuminate\Http\Request;

class CityLocalityController extends Controller
{
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)
            ->get(["name", "id", "state_id"]);
        return response()->json($data);
    }
    public function getLocality(Request $request)
    {
        $data['localities'] = Locality::where("city_id", $request->city_id)
            ->get(["name", "id", "city_id"]);
        return response()->json($data);
    }
}
