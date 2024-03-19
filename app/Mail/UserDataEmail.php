<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\UserData;

class UserDataEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $userData;

    public function __construct(UserData $userData)
    {
        $this->userData = $userData;
    }

    public function build()
    {
        return $this->markdown('emails.user_data')->with(['userData' => $this->userData]);
    }
}
