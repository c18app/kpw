<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkshopConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $kurz;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kurz)
    {
        $this->kurz = $kurz;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kurz@programovaniwebu.cz', 'Programování Webu')
            ->subject('Přihláška na kurz')
            ->markdown('emails.workshop.confirm');
    }
}
