<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostStatus extends Notification
{
    use Queueable;
    protected $post;
    protected $customMessage;

    /**
     * Create a new notification instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
        $this->setCustomMessage($post->status);
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
     * Get the mail representation of the notification.
     */
    public function toDatabase($notifiable): array
    {
        return [
            'data' => [
                'post_id' => $this->post->id,
                'user_id' => $notifiable->id,
                'post_naslov' => $this->post->naslov,
                'message' => $this->customMessage,
            ],
            'type'=> 'custom_type',
        ];
    }
    public function setCustomMessage($status)
    {
        if ($status == 'rejected') {
            $this->customMessage = 'Post je odbijen i obrisan!';
        } else {
            $this->customMessage = 'Post je odobren. Možete napisati članak!';
        }
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
