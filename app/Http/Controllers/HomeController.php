<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PriceCat;

class HomeController extends Controller
{
    public function home(){
        $home_product = Product::all();
        return view ('homepage.home_page', compact('home_product'));
    }
}
