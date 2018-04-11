<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AffiliateConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $affiliate;
    public $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($affiliate, $pass)
    {
        $this->affiliate = $affiliate;
        $this->pass = $pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('affiliate@programovaniwebu.cz', 'Programování Webu')
            ->subject('Registrace k affiliate')
            ->markdown('emails.affiliate.confirm');
    }
}
