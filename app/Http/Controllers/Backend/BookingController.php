<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    //
    public function bookinglist(){
        $booking=Booking::all();
        return view('pages.booking.bookingcreate',compact('booking'));
    }
  public function showform(){
        return view('pages.booking.bookingForm');
    }
    public function create(Request $request){
        Booking::create([
            'booking_name' => $request ->booking_name,
            'booking_details' => $request ->booking_details,
            ]);
            return redirect()->back();
    
}
public function delete($id)
{
$booking=Booking::find($id);
if($booking)
{
    $booking->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}

public function edit($id)
{
    // dd('ok');
    $booking=Booking::find($id);
    // dd($service);
    if($booking)
    {
        
        return view ('pages.booking.bookingedit',compact('booking'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $booking=Booking::find($id);
    $booking->update([
        'booking_name' => $request ->booking_name,
       'booking_details' => $request ->booking_details,
        ]);
       return redirect()->back();
 }
}
