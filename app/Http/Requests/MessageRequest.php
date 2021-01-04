<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required|max:100|min:3|string',
            'email' => 'required|max:200|min:6|string',
            'phone' => 'required|max:13|min:7|email',
            'message' => 'required|max:1000|min:10|string',
            'image' => 'image'
        ];
    }
     public function messages(){
         return [
             'name.required'  => 'Ad daxil ediləyib!',
             'name.string'  => 'Ad yanlışdır!',
             'name.min'  => 'Ad çox qısadır!',
             'name.max'  => 'Ad çox uzundur!',

             'email.required'  => 'Email daxil ediləyib!',
             'email.email'  => 'Email yanlışdır!',
             'email.min'  => 'Email çox qısadır!',
             'email.max'  => 'Email çox uzundur!',

             'phone.required'  => 'Nömrə daxil ediləyib!',
             'phone.string'  => 'Nömrə yanlışdır!',
             'phone.min'  => 'Nömrə çox qısadır!',
             'phone.max'  => 'Nömrə çox uzundur!',

             'image.image'  => 'Şəkil yanlışdır!',
         ];
     }
}
