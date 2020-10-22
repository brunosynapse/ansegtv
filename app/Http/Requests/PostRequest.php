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
            'page_title'=>'required|min:8|max:255',
            'post_title'=>'required|min:8|max:255',
            'content'=> 'nullable',
            'keyword'=> 'nullable',
            'description'=> 'nullable',
            'category_id'=> 'nullable',
            'path' => "required|min:3|max:255|unique:posts,path,{$this->id}",
            'tag'=>'nullable'
        ];
    }
}
