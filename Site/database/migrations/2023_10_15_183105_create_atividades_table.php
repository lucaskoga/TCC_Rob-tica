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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tipo");
            $table->string("serie");
            $table->string("nivelAno"); 
            $table->string("eixo");
            $table->string("conhecimento");
            $table->string("codHabilidade");
            $table->text("objetivoAprendizagem");
            $table->text("explicacaoHabilidade");
            $table->text("historiaAnalogia");
            $table->text("falaPersonagem");
            $table->text("exemploRoboticaDesplugado");
            $table->text("exemploRoboticaPlugado");
            $table->text("sugestaoRoboPlugado");
            $table->text("sugestaoHardware");
            $table->text("esquemaSensor");
            $table->string("videoAula");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
