<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasesRequest extends FormRequest
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
            'name'=>'required|min:3|max:255',
            'email'=>'required|min:8|max:255|email:rfc,dns',
            'message'=> 'required',
            'attachment' => 'nullable|mimes:jpeg,bmp,png,txt,jpg,pdf,odt,csv,doc,ppt,eps|max:5120'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Coloque seu nome',
            'name.min' => 'Seu nome deve ter no mínimo 3 caracteres',
            'name.max' => 'Seu nome deve ter no máximo 150 caracteres',
            'email.min'=> 'Por favor, forneça um e-mail válido',
            'email.max'=> 'Por favor, forneça um e-mail válido',
            'email.email'=> 'Por favor, forneça um e-mail válido',
            'email.required' => 'Seu e-mail é obrigatório para entrarmos em contato',
            'message.required'  => "Por favor, deixe sua mensagem no campo 'Mensagem'",
            'attachment.mimes' => 'Esse formato de arquivo não é suportado',
            'attachment.max' => "Certifique-se de que o arquivo enviado seja menor que 5MB (5120 KB)"
        ];
    }
}
