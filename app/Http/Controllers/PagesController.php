<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $links =[
            'https://platzi.com' => 'Curso de laravel',
             'https://laravel.com' => 'Pagina de laravel'
          ];
          
            return view('welcome',[
                  // 'teacher' => 'Guido Contreras',
                  'links'=> $links,
            ]);
    }

    public function aboutUs (){
        return view('about');
    }
}
