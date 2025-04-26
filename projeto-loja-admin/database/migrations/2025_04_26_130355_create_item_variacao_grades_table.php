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
        Schema::create('item_variacao_grades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('variacao_grade_id')->unsigned()->nullable();
            $table->foreign('variacao_grade_id')->references('id')->on('variacao_grades');
            $table->string("valor", 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_variacao_grades');
    }
};
