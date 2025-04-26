<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course_number');
            $table->string('day');



             //Atributos foraneos
             $table->unsignedBigInteger('area_id')->nullable();
             $table->unsignedBigInteger('training_center_id')->nullable();
            //referenciando la tabla users
             $table->foreign('area_id')
                 ->references('id')
                 ->on('area')->onDelete('set null');
             //referenciando la tabla categorias
             $table->foreign('training_center_id')
             ->references('id')
             ->on('training_center')->onDelete('set null');

             $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
