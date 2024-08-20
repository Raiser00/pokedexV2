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
        // Creation de la table attack avec lien a la table type via id
        Schema::create('attacks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('power');
            $table->integer('accuracy');
            $table->integer('maxpp');
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('imgLink');
            $table->foreignId('type1_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attacks');
    }
};
