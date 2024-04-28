<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostKreiran extends Notification
{
    use Queueable;
    protected $post;
    
    /**
    * Create a new notification instance.
    */
    public function __construct($post)
    {
        $this->post = $post;
    }
    
    /**
    * Get the notification's delivery channels.
    *
    * @return array<int, string>
    */
    public function via(object $notifiable): array
    {
        return ['database'];
    }
    
    /**
    * Get the array representation of the notification.
    *
    * @return array<string, mixed>
    */
    public function toDatabase($notifiable): array
    {
        return [
            'data' => [
                'post_id' => $this->post->id,
                'user_id' => $notifiable->id,
                'message' => 'Kreiran je novi post na blogu. Potrebna je potvrda!',
            ],
            'type'=> 'custom_type',
        ];
    }
    
    /**
    * Get the array representation of the notification.
    *
    * @return array<string, mixed>
    */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
