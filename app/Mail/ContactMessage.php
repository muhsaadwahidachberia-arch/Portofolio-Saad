<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $senderName;
    public string $senderEmail;
    public string $body;

    public function __construct(string $senderName, string $senderEmail, string $body)
    {
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->body = $body;
    }

    public function build()
    {
        return $this->subject("Pesan baru dari {$this->senderName} (Portofolio)")
            ->replyTo($this->senderEmail, $this->senderName)
            ->view('emails.contact');
    }
}
