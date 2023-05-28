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
        Schema::create('dismis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_journal')->nullable();

            $table->index('id_journal', 'dismiss_journal_idx');

            $table->foreign('id_journal', 'dismiss_journal_fk')->on('journals')->references('id');

            $table->unsignedBigInteger('id_worker')->nullable();
            $table->index('id_worker', 'dismiss_worker_idx');
            $table->foreign('id_worker', 'dismiss_worker_fk')->on('users')->references('id');
       
            $table->dateTime('date')-> nullable();
            
            $table->string('note')-> nullable();

            $table->string('file')-> nullable();

            $table->unsignedBigInteger('amount')-> nullable();

            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dismis');
    }
};
