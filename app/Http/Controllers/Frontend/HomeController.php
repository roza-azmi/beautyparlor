<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $product = Product::all();
        return view('frontend.pages.home',compact('product'));
    }
}
