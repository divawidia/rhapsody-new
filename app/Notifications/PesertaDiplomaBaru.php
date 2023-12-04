<?php

namespace App\Notifications;

use App\Models\CalonPesertaDiploma;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PesertaDiplomaBaru extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private CalonPesertaDiploma $participant;

    /**
     * Create a new notification instance.
     *
     * @param CalonPesertaDiploma $participant
     */
    public function __construct(CalonPesertaDiploma $participant)
    {
        $this->participant = $participant;
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
            ->subject('Calon Peserta Diploma 1 Baru Mendaftar')
            ->greeting('Halo Admin,')
            ->line('Peserta baru program diploma 1 telah melakukan registrasi online.')
            ->line('Detail peserta:')
            ->line('**Nama:** ' . $this->participant->nama_lengkap)
            ->line('**Email:** ' . $this->participant->email)
            ->line('**No. HP/WA:** ' . $this->participant->no_hp)
            ->line('**Program:** ' . $this->participant->program->name)
            ->line('**Tanggal Registrasi:** ' . now()->format('d-m-Y H:i'))
            ->action('Lihat Detail Calon Peserta', route('calon-peserta-diploma.index'))
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
            'title' => 'Registrasi Calon Peserta Baru',
            'message' => 'Calon Peserta Diploma 1 baru mendaftar: ' . $this->participant->nama_lengkap . ' (Program: ' . $this->participant->program->name . ')',
            'link' => route('calon-peserta-diploma.index'),
        ];
    }
}
