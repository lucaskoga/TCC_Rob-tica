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
        Schema::create('instituicaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->text("descricao");
            $table->string("cnpj");
            $table->string("atuacao");
            $table->string("publicoAlvo");
            $table->string("Endereco");
            $table->string("cidade");
            $table->string("cep");
            $table->string("bairro");
            $table->string("telefone");
            $table->string("email");
            $table->string("nomeContato");
            $table->string("funcaoContato");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituicaos');
    }
};
