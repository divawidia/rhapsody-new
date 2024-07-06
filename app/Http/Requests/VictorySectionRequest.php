<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VictorySectionRequest extends FormRequest
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
            'victory_section_title' => ['required'],
            'victory_section_body' => ['required'],
            'victory_section_btn_text' => ['required'],
            'victory_section_btn_icon' => ['image'],
            'victory_section_btn_url' => ['required'],
            'victory_section_bg' => ['image'],
        ];
    }
}
