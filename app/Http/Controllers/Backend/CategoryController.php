<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //
    public function categoryForm(){
        return view('pages.product.category.create');
    }

    // public function categoryPost(Request $request){
        // dd($request->all());
        // Category::create([
        //  coloum name of DB || name of input field
            // 'name'=>$request->category_name,
            // 'details'=>$request->category_details
        // ]);

        // return redirect()->back();
    // }

// }


public function categoryStore(Request $request){
    Category::create([
    'category_name'=>  $request->category_name,
    'service_details'=> $request->service_details,
    'price'=> $request->price,
]);
    
    


}

}

