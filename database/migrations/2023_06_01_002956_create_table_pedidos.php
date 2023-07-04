<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\StatusPedido;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->foreignIdFor(User::class);
            $table->boolean('delivery')->default(true);
            $table->string('nome');
            $table->string('telefone');
            $table->string('endereco')->nullable();
            $table->string('observacao')->nullable();
            $table->string('bairro')->nullable();
            $table->decimal('taxa_entrega', 5, 2)->default(0);
            $table->string('forma_pagamento');
            $table->foreignIdFor(StatusPedido::class);
            
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
        Schema::dropIfExists('pedidos');
    }
};
