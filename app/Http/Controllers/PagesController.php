<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    //
    public function home(){
     
        //latest() Para que los ultimos sean los primeros
        $messages = Message::latest()->paginate(10);
      
          
            return view('welcome',[
                 'messages' => $messages,
                
                //  'messages' => [], si no hay mensajes 
            ]);
    }

  
}
