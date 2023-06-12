<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreSingerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'artist_name' => ['required', 'max:40'],
            'name' => ['nullable', 'max:15'],
            'lastname' => ['nullable', 'max:30'],
            'image_url' => ['required', 'max:255'],
            'birth_date'=> ['required', 'date'],
            'published_album'=> ['nullable'],
            'is_in_a_band' => ['boolean']
        ];
    }
}
