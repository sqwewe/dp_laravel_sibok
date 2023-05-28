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
        Schema::create('solds', function (Blueprint $table) {
             $table->id(); 

            // $table->foreignId('id_worker')->constrained('workers');

            $table->unsignedBigInteger('id_workers')->nullable();
            $table->foreign('id_workers')->references('id')->on('users');


            $table->unsignedBigInteger('id_journal')->nullable();
            $table->index('id_journal', 'solds_journal_idx');
            $table->foreign('id_journal', 'solds_journal_fk')->on('journals')->references('id');

            $table->unsignedBigInteger('id_categories')->nullable();
            $table->index('id_categories', 'solds_category_idx');
            $table->foreign('id_categories', 'solds_category_fk')->on('category')->references('id');

            $table->unsignedBigInteger('amount')->nullable();

            $table->unsignedBigInteger('price')->nullable();

            $table->dateTime('date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solds');
    }
};
