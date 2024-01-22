<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:2|max:50',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'nullable',
            'series' => 'required',
            'sale_date' => 'nullable',
            'type' => 'required',
        ];
    }

    public function messages() {
        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno 2 caratteri',
            'title.max' => 'Il titolo deve essere lungo massimo 50 caratteri',
            'series' => 'Il nome della serie è obbligatoria',
            'type' => 'Il tipo di fumetto è obbligatorio',
        ];
    }
    
}
