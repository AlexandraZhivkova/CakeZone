<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('country.index', ['countries' => Country::all()]);
    }

    public function getPhoneCodes()
    {
        return view('country.phone-codes', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        return view('country.show', [
            'country' => $country
        ]);
    }

    public function showPhoneCode(Country $country)
    {
        return view('country.show-phone-code', [
            'country' => $country
        ]);
    }
}
