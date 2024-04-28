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
        Schema::create('artist', function (Blueprint $table) {
            $table->id();
            $table->string('artist_prezime');
            $table->string('artist_ime');
            $table->string('artist_email');
            $table->enum('artist_kategorija)', ['Black&Gray','Color','Realism','Fineline','Fantasy']);
            $table->string('artist_opis');
            $table->string('artist_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist');
    }
};
