<?php

use App\Models\Categoria;
use App\Models\Eventos;
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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('categoria')->default(Eventos::CAT_DEFAULT);
            $table->string('imagem')->nullable();
            $table->string('slug')->unique();
            $table->tinyText('descricao');
            $table->timestamp('eventoData');
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
        Schema::dropIfExists('eventos');
    }
};
