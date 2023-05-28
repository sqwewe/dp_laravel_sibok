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
        Schema::create('storerooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amount')-> nullable(); 
            $table->unsignedBigInteger('id_journal')->nullable();
            $table->index('id_journal', 'storeroom_journal_idx');
            $table->foreign('id_journal', 'storeroom_journal_fk')->on('journals')->references('id');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storerooms');
    }
};
