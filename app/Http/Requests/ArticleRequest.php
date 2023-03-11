<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:1|max:30',
            'producer' => 'required|min:3|max:40',
            'cover' => 'required|image',
            'description' => 'required|min:3|max:120',
        ];
    }

    public function messages(): array 
    {
        return [
            'title.required' => "E' necessario inserire il titolo",
            'title.min' => "Il titolo dev'essere lungo almeno un carattere",
            'title.max' => "Il titolo non deve superare i 30 caratteri",
            'producer.required' => "E' necessario inserire il produttore",
            'producer.min' => "Il produttore dev'essere lungo almeno 3 caratteri",
            'producer.max' => "Il produttore non deve superare i 40 caratteri",
            'cover.required' => "E' necessario inserire la foto",
            'cover.image' => "il formato dev'essere una foto",
            'description.required' => "E' necessario inserire la descrizione",
            'description.min' => "Il descrizione dev'essere lungo almeno 3 caratteri",
            'description.max' => "Il descrizione non deve superare i 120 caratteri",
        ];
    }
}
