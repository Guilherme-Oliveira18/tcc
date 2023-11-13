<?php

use App\Models\Categoria;
use App\Models\Post;
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
        Schema::create('categoria_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Post::class);
            $table->foreignIdFor(Categoria::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_post');
    }
};
