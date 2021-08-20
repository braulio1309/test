<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class colas extends Mailable
{
    use Queueable, SerializesModels;

    public $pokemon;

    public function __construct( $pokemon)
    {
        $this->pokemon = $pokemon;
    }

   

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('colas', ['pokemon' => $this->pokemon]);
    }
}
