<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditCalonPesertaDiplomaRequest extends FormRequest
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
            'nama_lengkap'=> ['required', 'string'],
            'nama_panggilan' => ['required', 'string'],
            'email' => ['required', 'email'],
            'tanggal_lahir' => ['required', 'date'],
            'umur' => ['required', 'min:18', 'numeric'],
            'jenis_kelamin' => ['required', 'string', Rule::in(['Laki-laki', 'Perempuan'])],
            'program_id' => ['required', Rule::exists('program_contents', 'id')],
            'alamat'=> ['required', 'string'],
            'no_hp'=> ['required', 'numeric'],
            'no_hp_ortu' => ['required', 'numeric'],
            'asal_sekolah' => ['required', 'string'],
            'jurusan_sekolah' => ['required', 'string'],
            'tahun_lulus' => ['required', 'numeric'],
            'references' => ['required', Rule::exists('references', 'id')],
        ];
    }
}
