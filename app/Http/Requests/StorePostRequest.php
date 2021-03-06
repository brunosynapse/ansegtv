<?php

namespace App\Http\Requests;

use App\Enums\PostStatusType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>"required|min:6|max:255|unique:posts",
            'image' => 'mimes:jpeg,jpg,png,gif,webp|max:2024',
            'category_id' => 'required',
            'description' => 'required',
            'created_at' => 'required',
        ];
    }
}
