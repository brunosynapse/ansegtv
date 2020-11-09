<?php

namespace App\Http\Requests;

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
            'content'=> 'nullable',
            'image' => 'mimes:jpeg,jpg,png,gif,webp|max:2024'
        ];
    }

    public function messages()
    {
        return [
            'path.unique' => 'Título já existente'
        ];
    }
}
