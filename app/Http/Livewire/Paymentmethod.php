<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class Paymentmethod extends Component
{

    public function add()   {
        $provider = new PaypalClient([]);
        $token  =  $provider->getAccessToken();
        $provider->setAccessToken($token);

        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units"  => [
                        [
                            "amount"  =>    [
                                "currency_code"  => "USD" ,
                                'value'  =>   2000 ,
                        ]

                        ]
                            ],
                            'application_context'  => [
                                'cancel_url'  => route('payment.cancel'),
                                'return_url'  => route('payement.success')
                            ]
        ]);
            return redirect($order['links'][1]['href']);
        }
        public function render()
    {

        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };

        return view('livewire.paymentmethod', [
            'totalpanier' => $total_cart
        ])
        ->extends('layout.app')
        ->section('content');
    }
}
