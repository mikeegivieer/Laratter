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
        
        $user = $request->User();
        $image = $request->file('image');

        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => $image->store('messages','public')
        ]);

        // dd($message);
        return redirect('/messages/'.$message->id);
    }

    public function search (Request $request){
        $query = $request->input('query');
        $messages = Message::with('user')->where('content','LIKE',"%$query%")->get();
        return view('messages.index',[
          'messages'=> $messages,
        ]);
    }
}
