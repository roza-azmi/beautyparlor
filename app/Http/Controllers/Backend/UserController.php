<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login()
{
    return view('pages.login');
}
public function doLogin(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    $credentials=$request->except('_token');
    if(auth()->attempt($credentials))
    {
        return redirect()->route('master');
    }
    return redirect()->back()->with('message','Invalid Credentials.');
    
}
public function logout()
{
    auth()->logout();
    return redirect()->route('admin.login')->with('message','Logout Sucessful');
}






}

