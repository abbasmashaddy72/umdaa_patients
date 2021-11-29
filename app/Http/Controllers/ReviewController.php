<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Support\Facades\URL;

class ReviewController extends Controller
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
        $doc_data = Doctor::get();
        $action = URL::route('review.store');

        return view('forms/review_ea', compact('doc_data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $request->validated();
        Review::create([
            'name' => $request->name,
            'doctor_id' => $request->doctor_id,
            'review' => $request->review,
            'stars' => $request->stars,
        ]);
        return redirect()->route('reviews')->with('message', 'Review Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review, $id)
    {
        $data = $review->findOrFail($id);
        $doc_data = Doctor::get();
        $action = URL::route('review.update', ['id' => $id]);

        return view('forms/review_ea', compact('data', 'doc_data', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewRequest $request, Review $review, $id)
    {
        $request->validated();
        Review::findOrFail($id)->update([
            'name' => $request->name,
            'doctor_id' => $request->doctor_id,
            'review' => $request->review,
            'stars' => $request->stars,
        ]);
        return redirect()->route('reviews')->with('message', 'Review Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review, $id)
    {
        Review::findOrFail($id)->delete();

        return redirect()->route('reviews')->with('message', 'Review Deleted Successfully');
    }
}
