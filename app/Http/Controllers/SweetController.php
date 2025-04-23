<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use App\Http\Requests\StoreSweetRequest;
use App\Http\Requests\UpdateSweetRequest;

class SweetController extends Controller
{
    /**
     * Display a listing of the sweets.
     */
    public function index()
    {
        return view('sweets.index', [
            'sweets' => Sweet::all(),
        ]);
    }

    /**
     * Display the specified sweet.
     */
    public function show(Sweet $sweet)
    {
        return view('sweets.show', [
            'sweet' => $sweet
        ]);
    }

    public function create()
    {
        return view('sweets.create');
    }

    public function store(StoreSweetRequest $request)
    {
        Sweet::create($request->validated());

        return redirect()->route('sweets.index')->with('success', 'Sweet created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sweet $sweet)
    {
        return view('sweets.edit', [
            'sweet' => $sweet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSweetRequest $request, Sweet $sweet)
    {
        $sweet->update($request->validated());

        return redirect()->route('sweets.index')->with('success', 'Sweet created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sweet $sweet)
    {
        //
    }
}
