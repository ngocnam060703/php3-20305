<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required','min:6','max:255', 'unique:posts,title'],
            'image'=>['required','image'],
            'description'=>['required','max:500'],
            'content'=> 'required|min:2',
            'category_id'=>['required','integer']
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Tiêu đề không được để trống',
            'title.min'=>'Tiêu đề phải có ít nhất 6 ký tự',
            'title.max'=>'Tiêu đề chỉ được tối đa 255 ký tự',
            'title.unique'=>'Tiêu đề đã tồn tại, vui lòng chọn tiêu đề khác',
            'image.required'=>'Hình ảnh không được để trống',
            'image.image'=>'File tải lên phải là hình ảnh',
            'description.required'=>'Mô tả không được để trống',
            'description.max'=>'Mô tả chỉ được tối đa 500 ký tự',
            'content.required'=>'Nội dung không được để trống',
            'content.min'=>'Nội dung phải có ít nhất 2 ký tự',
            'category_id.required'=>'Danh mục không được để trống',
            'category_id.integer'=>'Danh mục phải là số nguyên'
        ];
    }
}
