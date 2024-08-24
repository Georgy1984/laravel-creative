<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_at' => 'nullable|date_format:Y-m-d',
            'status' => 'nullable|integer',
            'user' => 'nullable|integer',
            'category' => 'nullable|string',
            'image_path' => 'nullable|string',
            'tag' => 'nullable|string',
            'likes' => 'nullable|string',
            'content' =>'nullable|string',
            'views' => 'nullable|integer',

        ];
    }
}
