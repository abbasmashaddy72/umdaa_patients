<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Department;
use App\Models\Service;
use Illuminate\Support\Facades\URL;

class ServiceController extends Controller
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
        $dep_data = Department::get();
        $action = URL::route('service.store');

        return view('forms/service_ea', compact('dep_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $request->validated();
        Service::create([
            'titles' => $request->titles,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('services')->with('message', 'Service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, $id)
    {
        $data = $service->findOrFail($id);
        $dep_data = Department::get();
        $action = URL::route('service.update', ['id' => $id]);

        return view('forms/service_ea', compact('data', 'dep_data', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service, $id)
    {
        $request->validated();
        Service::findOrFail($id)->update([
            'titles' => $request->titles,
            'department_id' => $request->department_id,
        ]);
        return redirect()->route('services')->with('message', 'Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, $id)
    {
        Service::findOrFail($id)->delete();

        return redirect()->route('services')->with('message', 'Service Deleted Successfully');
    }
}
