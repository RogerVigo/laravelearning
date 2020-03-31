<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            /*Existen dos opciones para la migracion en desarrollo. Si creamos la nueva columna
            'Title' y ejecutamos php artisan migrate, no funcionara. Debemos hacer un php artisan migrate:rollback
            y luego php artisan migrate. OJO!! haciendo esto, perdemos los datos guardados en la BDD. (se desaconseja en
            Production). Otra opcion es ejecutar php artisan migration:fresh que elimina todas las tablas y realiza una
            nueva migration.*/
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
