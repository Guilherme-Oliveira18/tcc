<?php

use App\Models\Eventos;
use App\Models\Turmas;
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
        Schema::create('pontos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->tinyText('descricao');
            $table->foreignIdFor(Turmas::class); //relação 1:n
            $table->foreignIdFor(Eventos::class); // relação 1:n
            $table->boolean('valido')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos');
    }
};
