<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pedido;
use App\Models\Produto;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pedido::class);
            $table->foreignIdFor(Produto::class);
            $table->integer('quantidade')->default(1);
            $table->decimal('total', 5, 2)->default(0);
            $table->string('obrigatorios')->nullable();
            $table->string('adicionais')->nullable();
            $table->string('observacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedido');
    }
};
