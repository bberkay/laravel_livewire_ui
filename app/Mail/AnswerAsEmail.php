<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Address;

class AnswerAsEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public string $email, public string $answer, public string $subject_of_answer)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Answer to your question',
            from: new Address('testforprojects42webio@gmail.com'),
            to: [new Address($this->email)],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // subject and answer variables are used in the view file emails\answer-as-email.blade.php
        return new Content(
            view: 'emails.answer-as-email',
            with: [
                'subject' => $this->subject_of_answer,
                'answer' => $this->answer,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
