<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkshopConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $seminar;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($seminar)
    {
        $this->seminar = $seminar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('kpw@kpw.cz', 'KPW (Kurz Programování Webu)')
            ->subject('[KPW] Přihláška na seminář')
            ->markdown('emails.workshop.confirm');
    }
}
