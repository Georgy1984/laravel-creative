<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
    'title' => 'required|string',
    'description' => 'nullable|string',
    'published_at' => 'nullable|date_format:Y-m-d',
    'status' => 'nullable|integer',
    'user' => 'nullable|string',
    'category' => 'nullable|string',
    'image_path' => 'nullable|string',
    'tag' => 'nullable|string',
    'likes' => 'nullable|string',
    'content' =>'nullable|string',
    'views' => 'nullable|integer',

        ];
    }

    public function messages()
    {
        return [

            'title.required' => ' fuck fuck fuck'
        ];

    }
}
