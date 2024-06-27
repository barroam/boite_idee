<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdeeRequest extends FormRequest
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
            //

          'auteur'=> ['required ','string'],
            'libelle'=> ['required' ,'string'],
            'description'=> ['required' ,'string'],
            'status'=>['required','string'],
            'date_creation'=> ['required' ,'date'],
            'categorie_id'=>['required','integer'],
            'user_id'=>['required','integer'],
        ];
    }
}
