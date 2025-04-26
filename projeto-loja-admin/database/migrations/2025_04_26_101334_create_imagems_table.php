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
        Schema::create('imagems', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->string('titulo', 100);
            $table->string('imagem', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagems');
    }
};
