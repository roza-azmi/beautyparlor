<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //
    public function view(){
        $category=Category::all();
        return view('pages.product.category.create',compact('category'));
    }
    public function showform(){
        return view('pages.product.category.categoryForm');
    }
    public function create(Request $request){


       
        Category::create([
            'category_name' => $request ->category_name,
            'category_details' => $request ->category_details,
            ]);
            return redirect()->back();
    }

    public function edit($id)
{
    // dd('ok');
    $category=Category::find($id);
    // dd($service);
    if($category)
    {
        
        return view ('pages.product.category.categoryedit',compact('category'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $category=Category::find($id);
    $category->update([
        'category_name' => $request ->category_name,
       'category_details' => $request ->category_details,
        ]);
       return redirect()->back();
 }

 public function delete($id)
{
$category=Category::find($id);
if($category)
{
    $category->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}
}

