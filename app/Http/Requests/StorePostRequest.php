<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=>'required|max:255|min:3',
            'data'=>'required',
            'text' =>'required|min:10'

        ];
    }

    public function messages(){
        return[
            'title.required'=>'il titolo è un campo obbligatorio',
            'data.required' =>'la data è un campo obbligatorio',
            'title.max' => 'il titolo può avere al massimo :max caratteri',
            'title.min' => 'il titolo può avere al minimo :min caratteri',
            'text.required' =>'il testo è un campo obbligatorio',
            'text.min' =>'il testo può avere minimo :min caratteri',
        ];
    }
}
