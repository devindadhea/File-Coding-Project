<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Address;
use Illuminate\Mail\Mailables\Address as MailablesAddress;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function envelope(): Envelope
    {
        return new Envelope(

            subject: 'Laravel Mail',
            from: new MailablesAddress('Laravel@gmail.com', 'Laravel')
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact'
        );
    }
}
