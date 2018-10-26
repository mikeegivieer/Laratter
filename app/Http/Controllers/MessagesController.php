<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //Todo lo que pongamos pongamos en una ruta como parámetro vendrá a este método
    //en este caso le ponemos id

    //Se enviá como parámetro un Message para que laravel falle en ssi no se encuentra en 
    //la base de datos y este sea nuestro error 404 La exception NotFoundHttpException se transformará
    //en un error 404, a diferencia del método anterior cuando no encuentra un id 
    //arroja una exception que indica que intentamos acceder a un objeto que no existe

    //laravel busca el id que pertenece a ese mensaje automáticamente
    public function show(Message $message){
        //ir a buscar message por id
        // $message = Message::find($id); 

        //una view de un message
           return view ('messages.show',[
               'message' => $message,
           ]);
    }

    public function create (CreateMessageRequest $request ){
    //para rcibir el pedido se usa un parametro de este pedido que se le pide a laravel
    //el objeto request
    // public function create (Request $request ){
        
        //Laravel tiene un validador interno, accedemos a el a traves de this
        //el primer parametro es request laravel tiene que saber que vamos a validar
        //el segundo parametro es un array de reglas,ccada key se corresponde a un fiel de nuestrio pedidoo,
        //cada value del array puede ser un string o un array de reglas
        //el tercer parametro se le cononoce como el array de mensajes y tiene una estructira
        //similar a array de rreglas lo usamos para customiuzar los mensajes 
        
             //El siguiente codigo se cambio a CreateMEssageRequest
             /*
        $this->validate($request,[
          'message' => ['required','max:160'] //max:160 le dice al validador que solo 160 caractteres de mensaje
        ],[
           'message.required' => 'Por favor escribe tu mensaje.',
           'message.max' => 'El mensaje no puede superar los 160 caracteres.'
          
          ]);
       */
        
       //Guardaremos el mensaje en la base de datos cuando el pedido
       //llegue usando eloquent
        $message = Message::create([
            'content' => $request->input('message'),
            'image' => 'https://picsum.photos/600/300?random'
        ]);

        // dd($message);
        return redirect('/messages/'.$message->id);
    }
}
