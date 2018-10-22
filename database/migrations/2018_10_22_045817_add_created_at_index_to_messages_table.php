<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            //Agrega un indice
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //tenemos que poner la eliminación de ese índice
            //el nombre del indice se construye a través del nombre de la table _ nombre de la columna _  
            //la palabra index
            $table->dropIndex('messages_created_at_index');
        });
    }
}
