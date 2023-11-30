<?php

namespace App\Notifications;

use App\Models\CalonPesertaDiploma;
use App\Models\ContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PertanyaanBaru extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private ContactForm $contact;

    /**
     * Create a new notification instance.
     *
     * @param ContactForm $contact
     */
    public function __construct(ContactForm $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Pertanyaan Baru')
            ->greeting('Halo Admin,')
            ->line('Ada pertanyaan baru masuk dari pengunjung website.')
            ->line('Detail pertanyaan:')
            ->line('**Nama:** ' . $this->contact->nama)
            ->line('**Email:** ' . $this->contact->email)
            ->line('**No. HP/WA:** ' . $this->contact->no_telp)
            ->line('**Pesan Pertanyaan:** ' . $this->contact->pesan)
            ->line('**Tanggal Dikirim:** ' . now()->format('d-m-Y H:i'))
            ->action('Lihat Detail Pertanyaan', route('contact-forms.index'))
            ->line('Terima kasih,')
            ->salutation('Sistem '.getSettingData()->site_name);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Pertanyaan Baru Dikirim',
            'message' => 'Ada pertanyaan baru masuk dari pengunjung website, mohon cek pada menu pertanyaan terkirim untuk melihat info lebih lengkap)',
            'link' => route('contact-forms.index'),
        ];
    }
}
