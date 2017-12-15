<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class HomeController extends Controller
{
    public function index()
    {
      $properties = Property::where('is_featured', '1')->get();
      return view('frontend.index')->with('properties', $properties);
    }
}
