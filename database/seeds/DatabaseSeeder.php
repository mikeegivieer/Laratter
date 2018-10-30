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
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Hacemos lo mismo que hicimos en tinker
        factory(App\Message::class)
        ->times(100) // Para crear 100 mensajes
        ->create();
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
