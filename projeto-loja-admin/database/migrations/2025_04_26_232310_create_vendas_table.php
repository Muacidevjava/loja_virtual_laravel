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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->BigInteger('tipo_venda_id')->nullable()->unsigned();
            $table->foreign('tipo_venda_id')->references('id')->on('tipo_vendas');

            $table->BigInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->BigInteger('vendedor_id')->nullable()->unsigned();
            $table->foreign('vendedor_id')->references('id')->on('vendedors');

            $table->BigInteger('cliente_id')->nullable()->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->string('uuid',100)->nullable(); //Código uuid da venda

            $table->date("data_venda");

            $table->decimal('valor_total_venda', 10,2)->nullable(); //Valor total da venda tirandos os descontos do itens
            $table->decimal('valor_bruto', 10,2)->nullable(); // Valor Bruto sem os descontos dos itens
            $table->decimal('valor_frete', 10,2)->nullable(); // Valor do Frete
            $table->decimal('despesas_outras', 10,2)->nullable(); // Valor do Frete
            $table->decimal('valor_imposto', 10,2)->nullable(); //Valor do Imposto
            $table->decimal('desconto_por_valor', 10,2)->nullable(); //Desconto por valor - tirando do valor_total da venda
            $table->decimal('desconto_por_percentual', 10,2)->nullable(); //desconto pecentual - tirando do valor total da venda
            $table->decimal('valor_total_do_desconto', 10,2)->nullable();//resultado do desconto, valor total
            $table->decimal('total_desconto_item', 10,2)->nullable();// total dos descontos dos itens

            $table->decimal('acrescimo_por_valor', 10,2)->nullable(); //Valor acrescido por por valor
            $table->decimal('acrescimo_por_percentual', 10,2)->nullable(); // Valor acrescido por percentual
            $table->decimal('valor_total_do_acrescimo', 10,2)->nullable(); // Total do acrescimto
            $table->decimal('valor_total_liquido', 10,2)->nullable(); // Valor líquido, o que tem que ser pago
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
