<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function list()
    { 
        $products=Product::all();
       return view('pages.product.productlist',compact('products'));

    }
}
