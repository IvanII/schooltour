<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFamilyRecreationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
//            'title'  => 'required',
//            'description'  => 'required',
//            'image'  => 'required',
//            'file_description'  => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
//            'title.required' => 'Поле не может быть пустым',
//            'description.required'  => 'Поле не может быть пустым',
//            'image.file_description'  => 'Поле не может быть пустым',
        ];
    }
}
