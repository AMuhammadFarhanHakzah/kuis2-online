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
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id_jawaban');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_pertanyaan');
            $table->enum('jawaban', ['a', 'b', 'c', 'd']);
            $table->enum('correct', ['ya', 'tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban');
    }
};
