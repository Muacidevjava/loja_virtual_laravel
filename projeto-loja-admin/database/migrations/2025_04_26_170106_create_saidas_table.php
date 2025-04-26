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
        Schema::create('saidas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger("produto_id")->unsigned();
            $table->foreign("produto_id")->references("id")->on("produtos");

            $table->decimal("qtde_saida",10,2)->default(1);
            $table->decimal("valor_saida")->default(0);
            $table->decimal("subtotal_saida",5,2);
            $table->date("data_saida");
            $table->string("observacao")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saidas');
    }
};
