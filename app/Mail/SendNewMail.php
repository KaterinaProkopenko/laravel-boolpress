<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $author;
    protected $authorMail;
    protected $authorMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $authorMail, $authorMessage)
    {
        $this->author = $author;
        $this->authorMail = $authorMail;
        $this->authorMessage = $authorMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->authorMail)->view('admin.mail.body', ["author" => $this->author, "authorMail" => $this->authorMail, "authorMessage" => $this->authorMessage]);
    }
}



