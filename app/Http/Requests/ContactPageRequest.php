<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPageRequest extends FormRequest
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
            'header_title' => ['required'],
            'header_bg' => ['image'],
            'header2_title' => ['required'],
            'header2_subtitle' => ['required'],
            'jam_kerja' => ['required'],
            'alamat' => ['required'],
            'no_telp' => [ 'required'],
            'email' => ['required', 'email'],
            'google_maps' => ['required'],
        ];
    }
}
