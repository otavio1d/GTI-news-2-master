<?php

use App\Models\Noticia;
use App\Models\Tag;
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
        Schema::create('tags_noticias', function (Blueprint $table) {
            $table->foreignIdFor(Noticia::class)->constrained();
            $table->foreignIdFor(Tag::class)->constrained();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_noticias');
    }
};
