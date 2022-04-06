<?php

 namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    //
    public function paymentlist(){
        $payment=Payment::all();

        return view('pages.payment.paymentcreate',compact('payment'));
        
        }
        public function view(){
            $payment=Payment::all();
            return view('pages.payment.paymentcreate',compact('payment'));
        }

        public function showform(){
            return view('pages.payment.paymentForm');
        }
        public function create(Request $request){
            Payment::create([
                'payment_name' => $request ->payment_name,
                'payment_details' => $request ->payment_details,
                ]);
                return redirect()->back();
        
    }

 public function delete($id)
{

$payment=Payment::find($id);
if($payment)
{
    $payment->delete();
    return redirect()->back();
}
else{
return redirect()->back();
}

}

public function edit($id)
{
    // dd('ok');
    $payment=Payment::find($id);
    // dd($service);
    if($payment)
    {
        
        return view ('pages.payment.paymentedit',compact('payment'));
    }
    else{
    return redirect()->back();
    }

}
public function update(Request $request,$id){
    $payment=Payment::find($id);
    $payment->update([
        'payment_name' => $request ->payment_name,
       'payment_details' => $request ->payment_details,
        ]);
       return redirect()->back();
 }
}

        
       
    
        


           