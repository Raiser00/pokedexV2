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
        // creation de la table pokemon avec une relation à la table type + possibilite d'avoir qu'un type
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('imgLink');
            $table->text('description');
            $table->integer('hp');
            $table->integer('att');
            $table->integer('attSpe');
            $table->integer('def');
            $table->integer('defSpe');
            $table->integer('vit');
            $table->float('size');
            $table->float('weight');
            $table->foreignId('type1_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreignId('type2_id')->nullable()->references('id')->on('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
