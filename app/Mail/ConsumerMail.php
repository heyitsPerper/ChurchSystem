<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class ConsumerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $code)
    {
        $this->fullname = Str::title($firstname) ." ". Str::title($lastname);
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Account confirmation code')->markdown('consumer.mails.confirm_code');
    }
}
