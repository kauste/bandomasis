<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Country;

class FrontController extends Controller
{
    public function show(Request $request){
        
        $hotels = match($request->sort){
            'price-asc' => Hotel::orderBy('hotels.price', 'asc')->get(),
            'price-desc'=> Hotel::orderBy('hotels.price', 'desc')->get(),
            default => Hotel::all(),
        };
            
        return view('front.index', ['hotels'=> $hotels, 'countries' => Country::all()]);
    }
}
