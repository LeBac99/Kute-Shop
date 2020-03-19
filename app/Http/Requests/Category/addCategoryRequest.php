<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class addCategoryRequest extends FormRequest
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
            'name'=>'required|min:2|unique:categories,name|max:32',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để trống !',
            'name.min'=>'Tên danh mục phải chứa ít nhất 2 kí tự !',
            'name.max'=>'Tên danh mục phải chứa ít nhất 2 kí tự !',
            'name.unique'=>'Tên danh mục không được trùng !'
        ];
    }
}
