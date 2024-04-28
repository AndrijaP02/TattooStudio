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
        Schema::create('konsultacije', function (Blueprint $table) {
                $table->id();
                $table->date('datum');
                $table->time('vreme');
                $table->string('ime');
                $table->string('prezime');
                $table->string('email');
                $table->string('brojtelefona');
                $table->unsignedBigInteger('artist_id');
                $table->timestamps();
        
                $table->foreign('artist_id')->references('id')->on('artist'); 
                $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultacije');
    }
};
