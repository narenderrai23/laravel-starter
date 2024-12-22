<?php

namespace App\Mail;

use App\Models\EstimateQuery;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuerySubmitted extends Mailable implements ShouldQueue, ShouldBeUniqueUntilProcessing
{
    use Queueable, SerializesModels;
    public $query;
    /**
     * Create a new message instance.
     *
     * @param  \App\Models\EstimateQuery  $query
     * @return void
     */
    public function __construct(EstimateQuery $query)
    {
        $this->query = $query;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Estimate Query Submitted',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.query_submitted',
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
