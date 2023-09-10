<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255', 'min:5'],
            'slug' => ['string', 'max:255', 'min:5'],
            'short_text' => ['required', 'string', 'min:5'],
            'body' => ['required', 'string', 'min:5'],
            'tags' => ['required'],
            'photo' => ['required', 'mimes:png,jpg,jpeg,webp,svg', 'max:2048'],
        ];
    }
}
