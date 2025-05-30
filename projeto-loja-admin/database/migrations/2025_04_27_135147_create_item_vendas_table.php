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
        Schema::create('item_vendas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('venda_id')->unsigned();
            $table->foreign('venda_id')->references('id')->on('vendas');

            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->decimal('quantidade', 10,2);
            $table->decimal('valor', 10,2);
            $table->decimal('subtotal', 10,2);
            $table->decimal('subtotal_liquido', 10,2);
            $table->decimal('desconto_percentual', 10,2)->default(0)->nullable();
            $table->decimal('desconto_por_valor', 10,2)->default(0)->nullable();
            $table->decimal('desconto_por_unidade', 10,2)->default(0)->nullable();
            $table->decimal('total_desconto_item', 10,2)->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_vendas');
    }
};
