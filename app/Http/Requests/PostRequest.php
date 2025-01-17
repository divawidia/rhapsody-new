<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => ['required', 'max:255', Rule::unique('posts', 'title')->ignore($this->artikel)],
            'body' => ['required'],
            'thumbnail_photo' => ['required', 'image'],
            'status' => ['required', 'in:1,0'],
            'tags.*' => ['required', 'exist:tags,id'],
            'category_id' => ['required']
        ];
    }
}
