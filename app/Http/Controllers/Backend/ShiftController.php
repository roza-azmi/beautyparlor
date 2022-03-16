<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    public function shift(){
        
    //
    $shifts=Shift::all();
    return view('pages.product.shifttime',compact('shifts'));
    }
}
