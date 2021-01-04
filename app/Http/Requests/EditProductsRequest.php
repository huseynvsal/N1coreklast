<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductsRequest extends FormRequest
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
            'ingredient' => 'required|max:200|min:6|string',
            'value' => 'required|max:10000|min:0|numeric',
            'protein' => 'required|max:10000|min:0|numeric',
            'fat' => 'required|max:10000|min:0|numeric',
            'energy' => 'required|max:10000|min:0|numeric',
            'weight' => 'required|max:10000|min:0|numeric',
            'life' => 'required|max:10000|min:0|numeric',
            'condition' => 'required|max:1000|min:10|string',
            'price' => 'required|max:10000|min:0|numeric',
            'category' => 'required|max:10000|min:1|string'
        ];
    }

    public function messages(){
        return [
            'name.required'  => 'Məhsul adı daxil ediləyib!',
            'name.string'  => 'Məhsul adı yanlışdır!',
            'name.min'  => 'Məhsul adı çox qısadır!',
            'name.max'  => 'Məhsul adı çox uzundur!',

            'ingredient.required'  => 'Məhsul tərkibi daxil ediləyib!',
            'ingredient.string'  => 'Məhsul tərkibi yanlışdır!',
            'ingredient.min'  => 'Məhsul tərkibi çox qısadır!',
            'ingredient.max'  => 'Məhsul tərkibi çox uzundur!',

            'value.required'  => 'Məhsulun qida dəyəri daxil ediləyib!',
            'value.numeric'  => 'Məhsulun qida dəyəri ancaq rəqəmdən ibarət olmalıdır!',
            'value.min'  => 'Məhsulun qida dəyəri çox kiçikdir!',
            'value.max'  => 'Məhsulun qida dəyəri çox böyükdür!',

            'protein.required'  => 'Zülal miqdarı daxil ediləyib!',
            'protein.numeric'  => 'Zülal miqdarı ancaq rəqəmdən ibarət olmalıdır!',
            'protein.min'  => 'Zülal miqdarı çox kiçikdir!',
            'protein.max'  => 'Zülal miqdarı çox böyükdür!',

            'fat.required'  => 'Yağ miqdarı daxil ediləyib!',
            'fat.numeric'  => 'Yağ miqdarı ancaq rəqəmdən ibarət olmalıdır!',
            'fat.min'  => 'Yağ miqdarı çox kiçikdir!',
            'fat.max'  => 'Yağ miqdarı çox böyükdür!',

            'energy.required'  => 'Enerji miqdarı daxil ediləyib!',
            'energy.numeric'  => 'Enerji miqdarı ancaq rəqəmdən ibarət olmalıdır!',
            'energy.min'  => 'Enerji miqdarı çox qısadır!',
            'energy.max'  => 'Enerji miqdarı çox uzundur!',

            'weight.required'  => 'Net çəki daxil ediləyib!',
            'weight.numeric'  => 'Net çəki ancaq rəqəmdən ibarət olmalıdır!',
            'weight.min'  => 'Net çəki çox kiçikdir!',
            'weight.max'  => 'Net çəki çox böyükdür!',

            'life.required'  => 'Məhsul ömrü daxil ediləyib!',
            'life.numeric'  => 'Məhsul ömrü ancaq rəqəmdən ibarət olmalıdır!',
            'life.min'  => 'Məhsul ömrü çox kiçikdir!',
            'life.max'  => 'Məhsul ömrü çox böyükdür!',

            'condition.required'  => 'Saxlanma şəraiti daxil ediləyib!',
            'condition.string'  => 'Saxlanma şəraiti yanlışdırQiymət!',
            'condition.min'  => 'Saxlanma şəraiti çox qısadır!',
            'condition.max'  => 'Saxlanma şəraiti çox uzundur!',

            'price.required'  => 'Qiymət daxil ediləyib!',
            'price.numeric'  => 'Qiymət ancaq rəqəmdən ibarət olmalıdır!',
            'price.min'  => 'Qiymət çox kiçikdir!',
            'price.max'  => 'Qiymət çox böyükdür!',

            'category.required'  => 'Kateqoriya daxil ediləyib!',
            'category.string'  => 'Kateqoriya yanlışdır!',
            'category.min'  => 'Kateqoriya çox qısadır!',
            'category.max'  => 'Kateqoriya çox uzundur!'
        ];
    }
}
