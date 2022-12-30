<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{







    public function detail_pdf($id) {
        $order = Order::find($id);
        $pdf = Pdf::loadView('pdf.invoice', [
            'order' => $order
        ])->setPaper('A4', 'landscape')->setWarnings(false);

        return $pdf->download('commande.pdf');

    }


    public function invoice_commande_admin($id)  {

        $order = Order::find($id);
        $pdf = Pdf::loadView('pdf.admininvoice', [
            'order' => $order
        ])->setPaper('a4', 'landscape');
        return $pdf->download('commande.pdf');
    }

}

