<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    //
    public function home(){
       //Eloquen es un ORM object relational maper se encarga de representar una esquema de bases de datos
       //relacional en un objeto 
        $messages = Message::paginate(10);
        // dd($messages);//funcion parecida a var_dump para el contenido de una variable (dump and die)
        // $messages =[
            
        //     [
        //         'id' => 1,
        //         'content' => 'Este es mi primer mensaje',
        //         'image' => 'https://picsum.photos/600/300?random'
        //     ],

        //     [
        //         'id' => 2,
        //         'content' => 'Este es mi segundo mensaje',
        //         'image' => 'https://picsum.photos/600/300?random'
        //     ],

        //     [
        //         'id' => 3,
        //         'content' => 'Este es mi tercer mensaje',
        //         'image' => 'https://picsum.photos/600/300?random'
        //     ],

        //     [
        //         'id' => 4,
        //         'content' => 'Este es mi cuarto mensaje',
        //         'image' => 'https://picsum.photos/600/300?random'
        //     ],

        // ];
          
            return view('welcome',[
                 'messages' => $messages,
                
                //  'messages' => [], si no hay mensajes 
            ]);
    }

  
}
