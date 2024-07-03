<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutPageRequest extends FormRequest
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
            'section2_title' => ['required'],
            'section2_subtitle' => ['required'],
            'section2_body' => ['required'],
            'section2_img' => ['image'],
            'section3_title' => [ 'required'],
            'section3_subtitle' => ['required'],
            'section3_body' => ['required'],
            'section3_img' => ['image'],
            'visi' => ['required'],
            'misi' => ['required'],
            'section4_body' => ['required'],
            'section4_img' => ['image'],
            'whyrhapsody_section_title' => ['required'],
            'whyrhapsody_section_subtitle' => ['required'],
            'whyrhapsody_section_card1_title' => ['nullable'],
            'whyrhapsody_section_card1_body' => ['required'],
            'whyrhapsody_section_card1_icon' => ['image'],
            'whyrhapsody_section_card2_title' => ['image', 'nullable'],
            'whyrhapsody_section_card2_body' => ['image', 'nullable'],
            'whyrhapsody_section_card2_icon' => ['image'],
            'whyrhapsody_section_card3_title' => ['required'],
            'whyrhapsody_section_card3_body' => ['required'],
            'whyrhapsody_section_card3_icon' => ['image'],
        ];
    }
}
