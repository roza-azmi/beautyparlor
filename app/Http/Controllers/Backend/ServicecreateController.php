<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicecreate;

class ServicecreateController extends Controller
{
    //
    public function view(){
        $service=Servicecreate::all();
        return view('pages.service.servicecreate',compact('service'));
    }
    
    
    //  public function list(){
         
        //  return view('pages.service.servicecreate',compact('service'));
    //  }
    public function showform(){
        return view('pages.service.serviceForm');
    }
     public function create(Request $request){
         Servicecreate::create([
             'service_name' => $request ->service_name,
            'service_details' => $request ->service_details,
             ]);
            return redirect()->back();
    
}
public function delete($id)
{
$service=Servicecreate::find($id);
if($service)
{
    $service->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}

public function edit($id)
{
    // dd('ok');
    $service=Servicecreate::find($id);
    // dd($service);
    if($service)
    {
        
        return view ('pages.service.serviceedit',compact('service'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $service=Servicecreate::find($id);
    $service->update([
        'service_name' => $request ->service_name,
       'service_details' => $request ->service_details,
        ]);
       return redirect()->back();
 }
}
