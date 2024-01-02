<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SosialisasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_sekolah' => 'required|exists:sekolah_sosialisasi,id',
            'tanggal_sosialisasi' => 'required|date',
            'jam_sosialisasi' => 'required',
            'lama_sesi' => 'required|integer',
            'jumlah_siswa' => 'integer',
            'status_sosialisasi' => 'required',
            'status_follup' => 'required'
        ];
    }
}
