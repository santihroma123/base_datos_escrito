<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TareaCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_categories', function (Blueprint $table) {
            $table->id();
            $table->string('tarea');
            $table->unsignedBigInteger('id_tarea');
            $table->string('categoria');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tarea')->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks_categories');
    }
}
