<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            /* 
               | --------------------------------------------------------------------------------------------
               | $table->string('phone'); Es un campo Varchar
               | Se agrega este campo en una nueva migración que después se elimina ya que se usó de práctica
               | --------------------------------------------------------------------------------------------
            */
            // $table->string('phone');

            /* 
               | ----------------------------------------------------------
               | $table->string('address')->nullable(); Es un campo Varchar
               | Acepta valor nulo
               | ----------------------------------------------------------
            */
            $table->string('address')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}


/* Notas:
    | ----------------------------------------
    | *Todas las migraciones deben tener 2 funciones
    |   *up() y down()
    |       *up() es para agregar tablas, columnas o index a la tabla o tablas de la base de datos
    |       *down() revierte las operaciones realizadas por el método up()
    | ----------------------------------------
*/
