<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category' => 'required|max:1000|min:10|string',
        ];
    }

    public function messages(){
        return [
            'category.required'  => 'Kateqoriya daxil ediləyib!',
            'category.string'  => 'Kateqoriya yanlışdır!',
            'category.min'  => 'Kateqoriya çox qısadır!',
            'category.max'  => 'Kateqoriya çox uzundur!',
        ];
    }
}
