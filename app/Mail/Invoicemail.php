<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invoicemail extends Mailable
{
    use Queueable, SerializesModels;

    public Order  $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {

        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                  ->from('vtp-market@vtp-market.com', 'VTP MARKET')
                  ->subject('FACTURE D\'ACHAT')
                  ->view('mail.oder');
    }
}
