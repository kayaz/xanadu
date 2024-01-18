<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChatSend extends Mailable
{
    use Queueable, SerializesModels;

    private $request;
    /**
     * @var Client
     */
    private $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Xanadu Resort - masz nową wiadomość')
            ->view('front.contact.mail-template', ['request' => $this->request])
            ->replyTo($this->request->form_email, $this->request->form_name);
    }
}
