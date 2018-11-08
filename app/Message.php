<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //laravel usa el nombre de la clase para buscar el nombre de la tabla
    // en este caso la clase Message va a resultar en la tabla messages
    //Si la clase se llamara MessageContent buscaria messages_contents
    //Laravel asume que tiene una primary key con nombre id

    //guarded es una propiedad que tienen una arry de columans que estabn
    //protegidas entonces por eso se deja vacio porque no hay nada que proteger
    //MassAsigmentException se arregla con la propiedad guardebn
    protected $guarded = [];

    public function user(){
        //La relacion de pertenencia
        return $this->belongsTo(User::class);
    }

}
