<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            /*
                | --------------------------------
                | *Campo 'title' de tipo varchar
                | *Campo 'url' de tipo varchar
                |   *El campo 'url' es para usar rutas amigables en la URL del navegador, también se le conoce como Slug
                | *Campo 'description' de tipo text
                | --------------------------------
            */
            $table->string('title');
            $table->string('url')->unique();
            $table->text('description');

            /* 
                | *timestamps() Crea 2 columnas
                |   *created_at Columna para guardar la fecha de creación del registro
                |   *updated_at Clumna para guardar la fecha de actualización del registro
            */
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
        Schema::dropIfExists('projects');
    }
}
