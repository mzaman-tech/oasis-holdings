<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function show($status)
    {
    	$properties = Property::where('project_status', $status)->get();
    	return view('frontend.properties')->with('properties', $properties)->with('status', $status);
    }

    public function detail($id)
    {
    	$property = Property::find($id);
    	return view('frontend.detail')->with('property', $property);
    }
}
