<?php

namespace App\Http\Controllers;
use Stripe;
use Session;

use Stripe\Charge;
use Stripe\Customer;
use App\Models\Buyer;
use App\Models\Order;
use App\Mail\Invoicemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
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

         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
         $customer = Customer::create(array(
            "address" => [
                "line1" => $request->input('adresse_delivry'),
                "city" => $request->input('city'),
                "country" => $request->input('country'),
            ],
            "email" =>  $request->input('email') ,
            "name" => $request->input('fullname'),
            "source" => $request->stripeToken
        ));

        Charge::create ([
            "amount" => $total_cart * 100,
            "currency" => "EUR",
            "customer" => $customer->id,
            "description" => "VTP PAIEMENT",
            "shipping" => [
                "name" =>$request->input('fullname'),
                "address" => [
                    "line1" =>  $request->input('adresse_delivry'),
                    "city" => $request->input('city'),
                    "country" => $request->input('country'),
                ],
            ]
    ]);

        $code = "VTP".rand(0,432154798);
        $order =  new Order();
        $order->fullname = $request->input('fullname');
       $order->adresse_delivry  = $request->input('adresse_delivry') ;
       $order->country_delivry =  $request->input('country') ;
       $order->city_delivry =$request->input('city') ;
       $order->phone =  $request->input('phone') ;
       $order->email =  $request->input('email') ;
       $order->quantity =  $sum_quantity ;
       $order->user_id  = Auth::user()->id ;
       $order->amount =  $total_cart ;
       $order->code  =  $code ;
       $order->save() ;
       foreach($sesion as $s){
        $order->products()->attach( $s['product_id'],
           [
            'quantity'=>$s['quantity'],
            'amount'=>$s['price']*$s['quantity']
           ]);
     };

        Mail::to($order->email)->send(new Invoicemail($order));
        session()->forget('cart');
        return redirect()->route('success.payment');

    }

    public function createStripe() {
        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };
        $buyer = Buyer::where('id',Auth::user()->owner_id)->first();
        if($buyer==null) {
            Alert::toast("Veuillez Renseigner vos informations Svp !" , 'success');
            return redirect()->route('buyer.register.form');
        }
        return view('orders.stripe', compact('buyer', 'total_cart'));
    }

    public function  create() {

        return view('orders.card-paiement');
    }

        public function successPayment() {
                return view('orders.success');
        }





 }
