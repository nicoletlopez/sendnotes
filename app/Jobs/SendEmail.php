<?php

namespace App\Jobs;

use App\Models\Note;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    use Queueable;

    public Note $note;

    /**
     * Create a new job instance.
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $noteUrl = config('app.url') . '/notes/' . $this->note->id;

        $emailContent = "Hello, you've received a new note. View it here: {$noteUrl}";

        Mail::raw($emailContent, function ($message) {
            $message->from('sendnotes@zimfy.co', 'Sendnotes')
                ->to($this->note->recipient)
                ->subject('You have a new note from' . $this->note->user->name);
        });
    }
}
