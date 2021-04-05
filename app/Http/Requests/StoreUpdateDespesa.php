<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDespesa extends FormRequest
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
       $despesa =[
        
            'descricao'=> 'required|min:2',
            'data'=> 'required',
            'idusuario'=> 'required|min:1',
            'valor'=> 'required',
            'imagem'=> 'required'  #|'dimensions:ratio=8mb' #aqui vou criar validacao a respeito do tamanho da imagem
        ];
        
        if ($this->method() == 'PUT'){
            $despesa['imagem'] = ['nullable'];
        }
        return $despesa;
    }
}
