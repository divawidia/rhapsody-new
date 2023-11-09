<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalonMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap'=> 'required|max=265',
            'nama_panggilan' => 'required|max=265',
            'email' => 'required|email',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required|numeric',
            'no_hp'=> 'required',
            'no_hp_ortu' => 'required',
            'pendidikan_terakhir' => 'required',
            'asal_sekolah' => 'required',
            'jurusan' => 'required',
            'pengalaman_kerja' => 'required'
        ];
    }
}
