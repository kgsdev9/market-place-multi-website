<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
     public function store(Request $request ) {


        $stripeCharge = $request->user()->charge(
            $request->amount, $request->paymentMethodId
        );

     }
}
