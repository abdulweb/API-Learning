<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function country(){
        return response()->json(Country::get(), 200);
    }

    public function countryById($id){
        return response()->json(Country::find($id), 200);
    }

    public function countrySave(Request $request){
        return response()->json(Country::create($request->all()), 201);
    }

    public function countryUpdate(Request $request, Country $country){
        $country->update($request->all());
        return response()->json($country, 201);
    }

    public function countryDelete(Request $request, Country $country){
        $country->delete();
        return response()->json($country, 204);
    }
}
