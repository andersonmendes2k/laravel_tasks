<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Dash;

class ClientRequest extends FormRequest
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

        //$this->sanitize();

        return [
            'name'=>['required', 'max:100', 'min:3', 'dash2'],
            'email' => ['required', 'email', 'unique:clients'],
            'age' => ['required', 'max:3', 'min:1']
        ];
    }

    public function sanitize(){

        $data = $this->all();

        $data['name'] = str_replace('-', ' ', $data['name']);

        $this->replace($data);

    }

    /*

    old method

    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if ($this->hasDash()) {
                $validator->errors()->add('name','O campo não deve conter -');
            }
        });
    }

    public function hasDash(){

        return strpos($this->name, '-');
    }
    */

    public function messages()
    {
        return[
            'name.required' => 'Preencha o nome do cliente.',
            'email.required' => 'Preencha o email do cliente.',
            'age.required' => 'Preencha a idade do cliente.'
        ];
    }
}
