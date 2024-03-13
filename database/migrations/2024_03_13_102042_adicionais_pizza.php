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
        Schema::create('adicionais_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('nome');
            $table->decimal('broto', 5, 2)->default(0);
            $table->decimal('grande', 5, 2)->default(0);
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('adicionais_pizza');
    }
};
