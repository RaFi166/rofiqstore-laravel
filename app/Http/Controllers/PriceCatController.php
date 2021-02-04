<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceCat;

class PriceCatController extends Controller
{
    public function add_price_range(){
        return view ("admin.PriceRange.add_price_range");
    }

    public function submit_price_range(Request $request){
        PriceCat::insert([
            'price_range' => $request -> price_range,
        ]);

        return back();
    }

    public function all_price_range(){
        $all_price_range = PriceCat::all();
        return view ('admin.PriceRange.all_price_range',compact('all_price_range'));
    }
}
