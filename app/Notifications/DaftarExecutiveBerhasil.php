<?php

namespace App\Notifications;

use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaExecutive;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DaftarExecutiveBerhasil extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    private CalonPesertaExecutive $participant;

    /**
     * Create a new notification instance.
     *
     * @param CalonPesertaExecutive $participant
     */
    public function __construct(CalonPesertaExecutive $participant)
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Konfirmasi Registrasi Berhasil - '.getSettingData()->site_name)
            ->greeting('Halo ' . $this->participant->nama_lengkap . ',')
            ->line('Selamat, Anda telah berhasil melakukan registrasi program Executive Program di LPK kami.')
            ->line('Berikut detail registrasi Anda:')
            ->line('**Nama:** ' . $this->participant->nama_lengkap)
            ->line('**Email:** ' . $this->participant->email)
            ->line('**No. HP/WA:** ' . $this->participant->no_hp)
            ->line('**Program:** ' . $this->participant->program->name)
            ->line('**Tanggal Registrasi:** ' . now()->format('d-m-Y H:i'))
            ->line('Silakan menunggu informasi selanjutnya dari admin kami terkait proses pendaftaran ulang LPK Kami.')
            ->line('Terima kasih,')
            ->salutation('Tim '.getSettingData()->site_name);
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
