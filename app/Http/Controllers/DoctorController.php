<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\City;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Locality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept_data = Department::get();
        $action = URL::route('doctor.store');

        return view('forms/doctor_ea', compact('dept_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $request->validated();
        if (!empty($request->popup_image)) {
            $newImageName1 = Str::random(20) . '.' . $request->popup_image->extension();
            $request->popup_image->move(public_path('images/doctors/popup'), $newImageName1);
        } else {
            $newImageName1 = null;
        }

        if (!empty($request->photo)) {
            $newImageName2 = Str::random(20) . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/doctors'), $newImageName2);
        } else {
            $newImageName2 = null;
        }

        Doctor::create([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'photo' => $newImageName2,
            'extra_services' => $request->extra_services,
            'about' => $request->about,
            'locality_id' => $request->locality_id,
            'department_id' => $request->department_id,
            'popup_image' => $newImageName1,
            'clinic_number' => $request->clinic_number,
        ]);
        return redirect()->route('doctors')->with('message', 'Doctor Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor, $id)
    {
        $data = $doctor->findOrFail($id);
        $dept_data = Department::get();
        $city_id = Locality::where('id', $data->locality_id)->pluck('city_id')->first();
        $state_id = City::where('id', $city_id)->pluck('state_id')->first();
        $locality_id = $data->locality_id;
        $action = URL::route('doctor.update', ['id' => $id]);

        return view('forms/doctor_ea', compact('data', 'dept_data', 'action', 'city_id', 'state_id', 'locality_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $request->validated();
        // dd($request->all());
        if (!empty($request->popup_image)) {
            $newImageName1 = Str::random(20) . '.' . $request->popup_image->extension();
            $request->popup_image->move(public_path('images/doctors/popup'), $newImageName1);
        } else {
            $newImageName1 = Doctor::findOrFail($id)->popup_image;
        }
        if (!empty($request->photo)) {
            $newImageName2 = Str::random(20) . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/doctors'), $newImageName2);
        } else {
            $newImageName2 = Doctor::findOrFail($id)->photo;
        }

        Doctor::findOrFail($id)->update([
            'name' => $request->name,
            'qualification' => $request->qualification,
            'photo' => $newImageName2,
            'extra_services' => $request->extra_services,
            'about' => $request->about,
            'locality_id' => $request->locality_id,
            'department_id' => $request->department_id,
            'popup_image' => $newImageName1,
            'clinic_number' => $request->clinic_number,
        ]);
        return redirect()->route('doctors')->with('message', 'Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor, $id)
    {
        Doctor::findOrFail($id)->delete();

        return redirect()->route('doctors')->with('message', 'Doctor Deleted Successfully');
    }
}
