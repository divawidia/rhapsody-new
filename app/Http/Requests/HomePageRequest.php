<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HomePageRequest extends FormRequest
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
            'banner_title' => ['required'],
            'banner_subtitle' => ['required'],
            'banner_video_url' => ['required'],
            'daftar_btn_text' => ['required'],
            'daftar_btn_url' => ['required'],
            'section2_title' => ['required'],
            'section2_subtitle' => ['required'],
            'section2_body' => ['required'],
            'section2_img1' => ['image', 'nullable'],
            'section2_img2' => [ 'image', 'nullable'],
            'section2_img3' => ['image', 'nullable'],
            'section2_img4' => ['image', 'nullable'],
            'program_section_title' => ['required'],
            'program_section_subtitle' => ['required'],
            'fasilitas_section_title' => ['required'],
            'fasilitas_section_subtitle' => ['required'],
            'fasilitas_section_img' => ['image', 'nullable'],
            'fasilitas_section_title2' => ['required'],
            'fasilitas_section_subtitle2' => ['required'],
        ];
    }
}
