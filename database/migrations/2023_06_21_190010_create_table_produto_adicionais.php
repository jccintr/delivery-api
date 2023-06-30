<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::create('produto_adicionais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Produto::class);
            $table->unsignedBigInteger('adicional_id');
            $table->timestamps();
            // cria o relacionamento com a tabela adicionais
            $table->foreign('adicional_id')->references('id')->on('adicionais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_adicionais');
    }
};
