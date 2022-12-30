<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Order;
use App\Mail\Invoicemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class PaymentController extends Controller
{

    public function createOrderBilling(Request $request) {
        Validator::make($request->all(),[
            'adresse_delivry'=> ['required'],
            'country'=>['required'],
            'fullname'=>['required'],
            'phone' =>['required', 'numeric'],
            'country'=>['required'],
            'city'=>['required'],
        ])->validate();
        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };

         try {
        $user = Auth()->user();
        $stripeCharge = $user->charge(
            $total_cart*100, $request->payment_method
        );

        $code = "VTP".rand(0,432154798);
            $order =  new Order();
            $order->fullname = $request->input('fullname');
           $order->adresse_delivry  = $request->input('adresse_delivry') ;
           $order->country_delivry =  $request->input('country') ;
           $order->city_delivry =$request->input('city') ;
           $order->phone =  $request->input('phone') ;
           $order->quantity =  $sum_quantity ;
           $order->user_id  = Auth::user()->id ;
           $order->amount =  $total_cart ;
           $order->code  =  $code;
           $order->save() ;
           foreach($sesion as $s){
            $order->products()->attach( $s['product_id'],
               [
                'quantity'=>$s['quantity'],
                'amount'=>$s['price']*$s['quantity']
               ]);
         };
         return redirect()->route('success.payment');
        //  return redirect()->route(');
    } catch (Exception $e) {
        //
    }


    }

    public function successPayment() {
        $user = Auth::user()->email ;
        Mail::to($user)->send(new Invoicemail($user));
        return view('orders.success');
    }

    public function createStripe() {
        return view('orders.stripe');
    }

    public function  create() {

        return view('orders.card-paiement');
    }



 }
