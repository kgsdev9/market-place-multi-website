<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Error;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{


    public function create() {
        return view('orders.card-paiement');
    }







 }
