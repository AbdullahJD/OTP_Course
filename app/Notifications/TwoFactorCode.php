<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorCode extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('رسالة التحقق بخطوتين')
                    ->line(' كود التحقق الخاص بك هو ' .$notifiable->code)
                    ->action('تأكيد الدخول', route('verify.index'))
                    ->line('شكرا لك لدخولك عالمنا');
    }
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
