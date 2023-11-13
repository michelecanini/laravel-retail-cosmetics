<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerfumeRequest extends FormRequest
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
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'size' => 'required',
            'price' => 'required|numeric|min:1.00',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio.',
            'brand.required' => 'Il brand è obbligatorio.',
            'category.required' => 'la categoria è obbligatoria.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'size.required' => 'La quantità è obbligatoria.',
            'price.numeric' => 'Il Formato del prezzo non è valido.',
            'price.min' => 'Il prezzo deve essere uguale o maggiore a 1.00',
            'image.required' => 'Caricare un immagine è obbligatorio.',
            'image.mimes' => 'Formato non valido, il file allegato deve essere di tipo immagine (jpg, png...).',
            'image.max' => 'Dimensioni massime consentite 512kb.'
        ];
    }
}
