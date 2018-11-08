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
        factory(App\User::class,50)->create()->each(function (App\User $user){
            factory(App\Message::class)
            ->times(20) // Para crear 100 mensajes
            ->create([
                'user_id' => $user->id,
            ]);
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
