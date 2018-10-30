<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

/*
anteriormente ya se tiene una definición para usuarios
comenzamos definido lo que es un mensaje, para agregar una definición
utilizamos el objeto factory junto con su método define  que tiene 
2 parámetros el primero es la clase que vamos a definir (mensaje)
el segundo es una función anónima que va a recibir un objeto que 
nos va a facilitar la creación de datos al azar, el objeto se llama Faker
Dentro de la función anónima usamos Faker para generar los datos falsos y
devolverlos en un array llave valor, (la llave es el nombre de la columna)
*/

$factory->define(App\Message::class, function (Faker $faker){

    //realText es un método de faker que devuelve texto basado en alicia en el pais de las maravillas
    //words otro métodos para palabras
    //paragraph que devolverá un párrafo
    //
    return [
        'content'=>$faker->realText(random_int(20,160)),
        //imageUrl genera url de lorempixel
        'image'=> $faker->imageUrl(600,338),
    ];
});

/*
para probar esto utilizaremos una herramienta de consola que proporciona laravel
a través de artisan que se  llamada tinker
Tenemos que verificar que tinker forme parte del proyectos en composer.json y que
este incluida en config -> app -> service providers -> TinkerServiceProvoder
*/

/*
En consola ejecutamos php artisan tinker, esto abrirá un loop entre leer 
evaluar lo que escribimos, mostrar la salida y volver a empezar
 Aquí usaremos la definición de addMessaje para construir un mensaje
 Esto se hace a través de la función factory

 >>factory(App\Message::class)->make(); construirá una instancia solamente
>>factory(App\Message::class)->create; la va a construir y guardar en una base de datos

Pero no vamos a crearlo usando tinker esto solo fue para probar la interacción con factory
lo que vamos a usar son los seeds
 
database-> DatabaseSeeder.php 





*/