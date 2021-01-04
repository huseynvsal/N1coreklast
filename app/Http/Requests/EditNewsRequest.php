<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditNewsRequest extends FormRequest
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
            'mycontent' => 'required|max:5000|min:10|string',
            'cover_image' => 'image'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Başlıq daxil ediləyib!',
            'name.string'  => 'Başlıq yanlışdır!',
            'name.min'  => 'Başlıq çox qısadır!',
            'name.max'  => 'Başlıq çox uzundur!',

            'mycontent.required'  => 'Səhifənin məzmunu daxil ediləyib!',
            'mycontent.string'  => 'Səhifənin məzmunu yanlışdırQiymət!',
            'mycontent.min'  => 'Səhifənin məzmunu çox qısadır!',
            'mycontent.max'  => 'Səhifənin məzmunu çox uzundur!',

            'cover_image.image'  => 'Örtük şəkli yanlışdır!',
        ];
    }
}
