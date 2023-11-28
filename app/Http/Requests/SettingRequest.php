<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'site_name' => ['required', 'string'],
            'logo_navbar' => ['required', 'image', 'max:1024'],
            'logo_footer' => ['required', 'image', 'max:1024'],
            'logo_sidebar_lg' => ['required', 'image', 'max:1024'],
            'logo_sidebar_sm' => ['required', 'image', 'max:1024'],
            'kontak_admin' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'alamat' => ['required', 'string'],
            'google_maps' => ['required', 'url:http,https'],
            'foto_lpk' => ['required', 'image', 'max:1024'],
            'location_title' => ['required', 'string'],
            'brosur' => ['required', 'url:http,https'],
            'url_facebook' => ['nullable', 'url:http,https'],
            'url_instagram' => ['nullable', 'url:http,https'],
            'url_tiktok' => ['nullable', 'url:http,https'],
            'url_youtube' => ['nullable', 'url:http,https'],
            'url_linkedin' => ['nullable', 'url:http,https'],
            'url_twitter' => ['nullable', 'url:http,https'],
        ];
    }
}
