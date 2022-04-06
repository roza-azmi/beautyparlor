<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;


class ShiftController extends Controller
{
    // public function shiftlist(){
        
    //
   
    // return view('pages.shifttime.shift');
    // }
    public function shiftlist(){
        $shift=Shift::all();
        return view('pages.shifttime.shiftcreate',compact('shift'));
    }
  public function showform(){
        return view('pages.shifttime.shiftForm');
    }
    public function create(Request $request){
             Shift::create([
                // change security
                //  $request->validate([
                    'customer_name' => $request ->customer_name,
                    'customer_details' => $request ->customer_details,
            ]);
            return redirect()->back();
}
public function edit($id)
{
    // dd('ok');
    $shift=Shift::find($id);
    // dd($service);
    if($shift)
    {
        
        return view ('pages.shifttime.shiftedit',compact('shift'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $shift=Shift::find($id);
    $shift->update([
        'customer_name' => $request ->customer_name,
       'customer_details' => $request ->customer_details,
        ]);
       return redirect()->back();
 }

 public function delete($id)
{
$shift=Shift::find($id);
if($shift)
{
    $shift->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}
}

