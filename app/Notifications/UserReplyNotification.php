<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class UserReplyNotification extends Notification
{
    protected $adminReply;

    public function __construct($adminReply)
    {
        $this->adminReply = $adminReply;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Вам пришел ответ на ваш запрос:')
            ->line($this->adminReply)
            ->action('Посмотреть ответ', url('/'))
            ->line('Спасибо за использование нашего сервиса!');
    }
}
