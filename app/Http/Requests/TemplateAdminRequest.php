<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TemplateAdminRequest extends Request
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
            //
                 "prod_nombre"    =>    "required|min:5|max:45",
                 "imagen"       =>      "required",
                 "descripcion"       =>      "required",
                 "precio"       =>      "required",
                 "categoria_id"       =>      "required"
        ];


    }

    public function messages()
    {
        return [
            'prod_nombre.required' => 'El campo nombre es requerido!',
            'prod_nombre.min' => 'El campo nombre no puede tener menos de 5 carácteres',
            'prod_nombre.max' => 'El campo nombre no puede tener más de 8 carácteres',
            'imagen.required' => 'El campo imagen es requerido!',
            'descripcion.required' => 'El campo descripcion no puede tener menos de 5 carácteres',
            'categoria_id.required' => 'El campo descripcion no puede tener más de 500 carácteres',
        ];
    }
}
