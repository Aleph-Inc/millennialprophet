<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {


        Stripe\Stripe::setApiKey('sk_test_IZCGLawXNlbX2CoZ2K97MiiY00T4dlfTUq');
        $name = $request->get('name');
        $donateAmount =  (int) $request->get('ammount');
        $acutalAmount = $donateAmount*100;
        Stripe\Charge::create ([
                "amount" => $acutalAmount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment from ".$name 
        ]);

        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}