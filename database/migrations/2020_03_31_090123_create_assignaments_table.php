<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('assignaments')) {
            echo "La tabla ya existe";
        }
        Schema::create('assignaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->boolean('completed');
            $table->timestamps();
            $table->timestamp('due_date')->nullable(); //null

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignaments');
    }
}
