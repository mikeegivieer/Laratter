<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{

    /*
    Si hacemos muchas validadciones en los controlles
    se volveran muy largos en esta calse modelamos el pedido y hacemos
    que se valide a si mismo. esto se hace a traves de los form-request
    */
    /**
     * Determine if the user is authorized to make this request.
     *
     * 
     * @return bool
     */
    public function authorize()
    {
        // return false;
        // como autorizaremos a cualquiera cambiamos a true
      return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     //aqui se ponen las reglas 
    public function rules()
    {
        //la estructura es la misma que en el controlador 
        //Para recuperar los mensajes del controles se usa el metodo
        // /public function mensenges
        return [
            'message' => ['required','max:160'] //max:160 le dice al validador que solo 160 caractteres de mensaje
        ];
    }

    public function messages (){
        return [
             'message.required' => 'Por favor escribe tu mensaje.',
             'message.max' => 'El mensaje no puede superar los 160 caracteres.'
          ];
    } 

}
