<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //laravel usa el nombre de la clase para buscar el nombre de la tabla
    // en este caso la clase Message va a resultar en la tabla messages
    //Si la clase se llamara MessageContent buscaria messages_contents
    //Laravel asume que tiene una primary key con nombre id
}
