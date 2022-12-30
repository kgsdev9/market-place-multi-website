<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Buyer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
      public function index() {
        $buyer = Buyer::where('id',Auth::user()->owner_id)->first();
        if($buyer==null) {
            Alert::toast("Veuillez Renseigner vos informations Svp !" , 'success');
            return redirect()->route('buyer.register.form');
        }
        return view('orders.payementdelivy', compact('buyer'));
      }

      public function store(Request $request) {

        Validator::make($request->all(),[
            'adresse_delivry'=> ['required'],
            'country'=>['required'],
            'fullname'=>['required'],
            'phone' =>['required', 'numeric'],
            'country'=>['required'],
            'city'=>['required'],
        ])->validate();

        try{

            $sesion = session('cart');
            $sum_quantity = 0 ;
            $total_cart=0;
            foreach( (array) $sesion as $s){
               $sum_quantity = $sum_quantity +$s['quantity'];
            };
            foreach( (array)$sesion as $s){
                $total_cart = $total_cart + $s['price']*$s['quantity'];
             };

            Stripe::setApiKey('sk_test_51M0SbKJuTJSR5uqBzN4Sq1M3AloKx1EXMLYczuYEn0rWhk9ElebatGX8e98Spzfayh0unM9ITAEjA0RRuEnV57Lt00zaXYdSQG');
            $charges = Charge::create(array(
               "amount" => $total_cart * 100,
               "currency" => "EUR",
               "source" => $request->input('stripeToken'),
               "description" => "PAIEMENT VTP"
           ));

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
           $order->code  =  $code ;
           $order->charge_id = $charges->id ;
           $order->save() ;
           foreach($sesion as $s){
            $order->products()->attach( $s['product_id'],
               [
                'quantity'=>$s['quantity'],
                'amount'=>$s['price']*$s['quantity']
               ]);
         };
           return redirect()->route('detail.order',$order->id);
        }catch(\Exception $e){
            return redirect()->route('order.store')->with('error', $e->getMessage());
        }

      }

      public function detail_order($id) {
        $order = Order::where('id', $id)->where('user_id', Auth::user()->id)->first();
        return view('dashboard.orders.detail', compact('order'));
      }


      public function show() {
        $user_commande = Order::where('user_id', Auth::user()->id)->get();
        return view('dashboard.orders.liste', compact('user_commande'));
      }

}
