<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class NotifyUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $emailMessage;

    /**
     * Create a new emailMessage instance.
     *
     * @return void
     */
    public function __construct($emailMessage)
    {
        $this->user = Auth::user();
        $this->emailMessage = $emailMessage;
    }

    /**
     * Build the emailMessage.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notify-user')
                    ->with([
                        'user' => $this->user,
                        'emailMessage' => $this->emailMessage,
                    ]);
    }
}