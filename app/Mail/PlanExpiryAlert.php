<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PlanExpiryAlert extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $alerts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($alerts)
    {
        $this->alerts = $alerts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
