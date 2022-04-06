<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function list(){
        $product=Product::all();
        return view('pages.product.productlist',compact('product'));
    }
    
    public function productlist(){
        $product=Product::all();
        return view('pages.product.productlist',compact('product'));
    }
    public function showform(){
        return view('pages.product.productForm');
    }
    public function create(Request $request){
        // dd($request->all());

        $filename=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $filename= date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/product/',$filename);
        }
        Product::create([
            'product_name' => $request ->product_name,
            'product_details' => $request ->product_details,
            'image'=> $filename,
            ]);
            
            return redirect()->back();
    
}

public function edit($id)
{
    // dd('ok');
    $product=Product::find($id);
    // dd($service);
    if($product)
    {
        
        return view ('pages.product.productedit',compact('product'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $product=Product::find($id);
    $product->update([
        'product_name' => $request ->product_name,
       'product_details' => $request ->product_details,
        ]);
       return redirect()->back();
    
 }

 public function delete($id)
{
$product=Product::find($id);
if($product)
{
    $product->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}
}
