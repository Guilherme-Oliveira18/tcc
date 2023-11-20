<?php

use App\Models\Cursos;
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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignIdFor(Cursos::class);
            $table->string('slug')->unique();
            $table->string('mascote_nome')->nullable();
            $table->string('imagem')->nullable();
            $table->year('ano_entrou');
            $table->year('ano_saiu');
            $table->boolean('ativo')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
