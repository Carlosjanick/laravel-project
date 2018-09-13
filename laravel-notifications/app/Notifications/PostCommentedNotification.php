<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;  
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Comment;

class PostCommentedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $comment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("Novo comentario: {$this->comment->title}")
                    ->line($this->comment->body)
                    ->action('Ver comentario', route('posts.show', $this->comment->post_id))
                    ->line('Abraços []!');
    }

    /**
     * Grava na base de dados o comentario na notificaçao
     *
     * @param [type] $notifiable
     * @return void
     */
    public function toDatabase($notifiable)
    {
        return [
            'comment' => $this->comment->load('user'), #-- grava tamben o user que fez o comentario
        ];
    }

    /*
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
