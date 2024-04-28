<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class KonsultacijaPotvrda extends Notification
{
    use Queueable;
    
    protected $konsultacija;
    
    /**
    * Create a new notification instance.
    */
    public function __construct($konsultacija)
    {
        $this->konsultacija = $konsultacija;
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
                'konsultacija_id' => $this->konsultacija->id,
                'user_id' => $notifiable->id,
                'message' => 'Nova konsultacija za potvrdu!',
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
