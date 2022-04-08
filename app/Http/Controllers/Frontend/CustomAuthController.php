<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomAuthController extends Controller
{
    //
    
    public function registration(){
        $customer=User::all();
        return view('frontend.pages.registrationFrom',compact('customer'));dd($request->all());


    }
    public function customer(){
        $customer=User::all();
        return view('pages.customer.customer',compact('customer'));
    }
    
    
    public function doregistration(Request $request){
        
        
        $request->validate([
            
            'name'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'email'=>'required | email',
            'password'=>'required',
        ]);

       
       $customer= User::create([
            'name' => $request ->name,
            'address' => $request ->address,
            'phone_number' => $request ->phone_number,
            'email' => $request ->email,
            'password' =>bcrypt( $request ->password),
            ]);    
               
       

            return redirect()->route('home');
    
}




public function Login(){
    return view('frontend.pages.Login');
 
 }

 public function doLogin(Request $request){
    //  dd($request->all());
    
     $request->validate([
         'email'=>'required|email',
         'password'=>'required',
     ]);
     

     $customer=$request->except('_token');
    if(auth()->attempt($customer))
    {
        return redirect()->route('customer.Login');
    }
    return redirect()->back()->with('message','Invalid Credentials.');
    
}
public function Logout()
{
    auth()->logout();
    return redirect()->route('home')->with('message','Logout Sucessful');
}

















    public function serviceshow(){
        return view('frontend.serviceshow');

    }
    
    
}
