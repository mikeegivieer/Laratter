<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        
        $messages =[
            
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje',
                'image' => 'https://picsum.photos/600/300?random'
            ],

            [
                'id' => 2,
                'content' => 'Este es mi segundo mensaje',
                'image' => 'https://picsum.photos/600/300?random'
            ],

            [
                'id' => 3,
                'content' => 'Este es mi tercer mensaje',
                'image' => 'https://picsum.photos/600/300?random'
            ],

            [
                'id' => 4,
                'content' => 'Este es mi cuarto mensaje',
                'image' => 'https://picsum.photos/600/300?random'
            ],

        ];
          
            return view('welcome',[
                 'messages' => $messages,
                
                //  'messages' => [], si no hay mensajes 
            ]);
    }

  
}
