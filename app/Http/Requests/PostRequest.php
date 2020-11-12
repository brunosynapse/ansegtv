<?php

namespace App\Http\Requests;

use App\Enums\PostStatus;
use App\Enums\Category;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => ['required', new EnumValue(Category::class)],
            'status' => ['required', new EnumValue(PostStatus::class)]
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'O campo categoria é obrigatório.',
            'status.required' => 'Defina o estado da publicação.'
        ];
    }
}
