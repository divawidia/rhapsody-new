<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramContentRequest extends FormRequest
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
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'price_desc' => ['required'],
            'batch' => ['required'],
            'register_start' => ['required'],
            'register_end' => ['required'],
            'btn_text' => ['required'],
            'btn_url' => ['required'],
            'btn_icon' => ['image'],
            'overview' => ['required'],
            'short_overview' => ['required'],
            'benefit_content' => ['required'],
            'interest_percentage' => ['required', 'numeric'],
            'alumnies' => ['required'],
            'program_icon' => ['image'],
            'program_id' => ['required'],
            'status' => ['in:1,0'],
        ];
    }
}
