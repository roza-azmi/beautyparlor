<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomAuthController extends Controller
{
    //
    public function Login(){
       return view('pages.Login');
    
    }
    public function registration(){
        $customer=Customer::all();
        return view('frontend.pages.registrationFrom',compact('customer'));

    }
    public function customer(Request $request){
        Customer::create([
            'name' => $request ->name,
            'adress' => $request ->adress,
            'phone_number' => $request ->phone_number,
            'email' => $request ->email,
            'password' => $request ->password,
            ]);
            return redirect()->back('home');
    
}


    public function serviceshow(){
        return view('frontend.serviceshow');

    }
    
    
}
