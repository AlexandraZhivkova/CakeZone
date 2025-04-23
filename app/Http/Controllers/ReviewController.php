<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Contracts\Validation\Validator;

class ReviewController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'comment' => ['string'],
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reviews.index', [
            'reviews' => Review::all()->sortByDesc('updated_at')->take(7),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $request->validated();
        Review::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
