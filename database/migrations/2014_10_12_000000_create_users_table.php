<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Estado;
use App\Models\Cidade;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla');
            $table->timestamps();
        });

        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignIdFor(Estado::class);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->default(2); // 1-cliente 2-loja 3-admin
            $table->string('push_token')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->rememberToken();
            // dados do tenant
            $table->string('telefone')->nullable();
            $table->boolean('ativo')->default(true);
            $table->boolean('aberto')->default(false);
            $table->string('logotipo')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('bairro')->nullable();
            $table->foreignIdFor(Cidade::class);
            //$table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('chave_pix')->nullable();
            $table->string('favorecido_pix')->nullable();
            $table->string('cor_fundo')->nullable();
            $table->string('cor_texto')->nullable();
            $table->string('tempo_espera')->nullable();
            $table->timestamp('opened_at')->nullable();
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
        Schema::dropIfExists('estados');
        Schema::dropIfExists('cidades');
        Schema::dropIfExists('users');
    }
};
