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
        Schema::create('aprendice', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified')->nullable();
            $table->string('cell_number');



            //Atributos foraneos
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('computer_id')->nullable();
           //referenciando la tabla users
            $table->foreign('course_id')
                ->references('id')
                ->on('course')->onDelete('set null');
            //referenciando la tabla categorias
            $table->foreign('computer_id')
            ->references('id')
            ->on('computer')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendice');
    }
};
