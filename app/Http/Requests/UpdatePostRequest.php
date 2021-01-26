<?php

namespace App\Http\Requests;

use App\Enums\Category;
use App\Enums\PostType;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
            'title'=>"required|min:8|max:255|unique:posts,path,{$this->id}",
            'image' => 'mimes:jpeg,jpg,png,gif,webp|max:2024',
            'category_id' => ['required',  Rule::in(Category::getValues())],
            'description' => 'required',
            'status' => ['required', Rule::in(PostType::getValues())]
        ];
    }
}
