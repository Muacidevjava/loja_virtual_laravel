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
        Schema::create('movimentos', function (Blueprint $table) {
            $table->id();
            $table->BigInteger("tipo_movimento_id")->unsigned();
            $table->foreign("tipo_movimento_id")->references("id")->on("tipo_movimentos");

            $table->BigInteger("produto_id")->unsigned();
            $table->foreign("produto_id")->references("id")->on("produtos");

            $table->BigInteger("entrada_avulsa_id")->unsigned()->nullable();
            $table->foreign("entrada_avulsa_id")->references("id")->on("entradas");

            $table->BigInteger("saida_avulsa_id")->unsigned()->nullable();
            $table->foreign("saida_avulsa_id")->references("id")->on("saidas");

            $table->string("ent_sai",1);
            $table->string("estorno",1)->default("N");
            $table->date("data_movimento");
            $table->decimal("qtde_movimento", 10,2);
            $table->decimal("valor_movimento",10,2)->default(0);
            $table->decimal("subtotal_movimento",10,2)->default(0);
            $table->string("descricao");
            $table->decimal("saldoestoque", 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentos');
    }
};
