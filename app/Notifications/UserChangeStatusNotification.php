<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Markdown;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class UserChangeStatusNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(bool $active, User $user)
    {
        $this->active = $active;
        $this->user = $user;
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

        $status = match ($this->active) {
            false => '<span style="color:#b61010;font-weight: bold">nieaktywne</span>',
            default => '<span style="color:darkgreen;font-weight: bold">aktywne</span>',
        };


        $message = match ($this->active) {
            false => 'Aby dowiedzieć sie więcej na ten temat, skontaktuj się z nami: admin@zdrowiepubliczne-rzeszow.pl',
            default => 'Już teraz możesz zapisać się na interesujący Ciebie kurs:',
        };

        return (new MailMessage)
            ->subject('Podkarpacki Oddział PTMSiZP - aktualizacja konta')
            ->greeting('Witaj '. $this->user->name.',')
            ->line(new HtmlString('aktualny status Twojego konta to: ' . $status . '.<br><br>'))
            ->line($message)
            ->when($this->active, function ($message) {
                $message->action('Dostępne kursy', url('lista-kursow'));
            })
            ->salutation(new HtmlString('<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation"><tr><td>'.Markdown::parse('To jest wiadomość automatyczna, nie odpowiadaj na tego maila. Jeśli masz jakiekolwiek pytania, napisz do nas: admin@zdrowiepubliczne-rzeszow.pl').'</td></tr></table>'));
    }
}
