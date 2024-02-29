<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('msg_em_preparacao')->default('Olá, recebemos o seu pedido e já o estamos preparando.');
            $table->string('msg_a_caminho')->default('Oba, o seu pedido já está a caminho !');
            $table->string('msg_pronto')->default('Oba, o seu pedido já está pronto para retirada !');
            $table->string('msg_retirado')->default('O seu pedido foi retirado em nossa loja. Obrigado pela preferência. Volte sempre.');
            $table->string('msg_entregue')->default('O seu pedido foi entregue. Obrigado pela preferência. Volte sempre.');
            $table->string('msg_rejeitado')->default('Que chato, lamentamos mas não poderemos atender ao seu pedido no momento.');
            $table->string('msg_cancelado')->default('Que chato, infelizmente o seu pedido foi cancelado.');
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
        Schema::dropIfExists('table_mensagens');
    }
};
