<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    Laravel nos ofrece la capacidad de separar nuestros seeds en diferentes clases

    */
    //para ejecutar esta funcion php artisan db:seed
    public function run()
    {
        //Tenemos 50 usuarios creados y los tenemos en una coleccion en la
        //variable $users
        $users = factory(App\User::class,50)->create();
        
        //por cada uno de ellos creamos sus mensajes y a demas le hacemos seguir
        // a 50 usuarios al azaar
        $users->each(function (App\User $user) use ($users){
            factory(App\Message::class)
            ->times(20) // Para crear 100 mensajes
            ->create([
                'user_id' => $user->id,
            ]);
            $user->follows()->sync(
                $users->random(10)
            );
        });
       
    }
   /*
    Probamos esto desde artisan con 
    php artisan db:seed
    Listo, abra creado en base de datos todos los mensajes 
    
    Para borrar todos los datos en base de datos y subirlos otra vez

    php artisan migrate:refresh --seed

    Agregando --seed después de que termina de subir los datos ejecuta seed

   */

}
