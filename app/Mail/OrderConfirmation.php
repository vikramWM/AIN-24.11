<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $requestDetails;

    /**
     * Create a new message instance.
     *
     * @param array $requestDetails
     * @return void
     */
    public function __construct($requestDetails)
    {
        $this->requestDetails = $requestDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('order_confirmation')
                    ->with('details', $this->requestDetails);
    }
}
