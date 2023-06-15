<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DevisNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $devis, $payment_link;
    public function __construct($devis,$payment_link)
    {
        $this->devis = $devis;
        // $this->devis = public_path() . '/' . $storagePath;

        $this->payment_link = $payment_link;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('Salut, nous avons traité votre demande.')
                    ->line('Votre devis est joint à ce présent mail.')
                    ->line('Veuillez suivre ce lien pour effectuer votre paiement : ')
                    ->action('Payez ici', url($this->payment_link))
                    ->attach($this->devis);
    }

    /**
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
