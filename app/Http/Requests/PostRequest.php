<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'title'=>'required|min:8|max:255',
            'content'=> 'nullable',
            'keyword'=> 'nullable',
            'description'=> 'nullable',
            'category_id'=> 'nullable',
            'path' => "unique:posts,path,{$this->id}",
            'image' => 'mimes:jpeg,jpg,png,gif,webp|max:2024'
        ];
    }

    public function messages()
    {
        return [
            'path.unique' => 'Não foi possivel criar uma URL a partir desse título. Por favor, altere o título!'
        ];
    }
}
