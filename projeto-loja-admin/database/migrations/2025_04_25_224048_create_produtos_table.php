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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->Biginteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses');

            $table->BigInteger('categoria_id')->nullable()->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->string('nome', 100);
            $table->string('gtin', 20)->nullable();
            $table->string('sku', 80)->nullable();
            $table->string('imagem', 100)->nullable();

            $table->string('codigo_barra', 60)->nullable();
            $table->string('unidade', 20);
            $table->string('origem', 10)->nullable();
            $table->string('usa_grade', 1)->default('N');
            $table->string('eh_produto', 1)->default('N');
            $table->string('eh_insumo', 1)->default('N');

            $table->decimal('preco_venda', 10,2);
            $table->decimal('preco_alto', 10, 2)->default(0);
            $table->decimal('preco_custo', 10,2)->nullable()->default(0);
            $table->decimal('margem_lucro', 10,2)->nullable()->default(0);

            $table->decimal('estoque_minimo', 10,2)->nullable()->default(0);
            $table->decimal('estoque_maximo', 10,2)->nullable()->default(0);
            $table->decimal('estoque_inicial', 10,2)->nullable()->default(0);
            $table->integer('estoque_atual')->nullable()->default(0);


            $table->decimal('largura', 10, 2)->nullable()->default(0);
            $table->decimal('comprimento', 10, 2)->nullable()->default(0);
            $table->decimal('altura', 10, 2)->nullable()->default(0);
            $table->decimal('peso_liquido', 10, 2)->nullable()->default(0);
            $table->decimal('peso_bruto', 10, 2)->nullable()->default(0);
            $table->text('descricao')->nullable();

            $table->string('promocao', 100)->nullable();
            $table->string('destaque', 100)->nullable();
            $table->string('lancamento', 100)->nullable();


            $table->string('ncm', 13)->nullable();
            $table->string('cest', 7)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
