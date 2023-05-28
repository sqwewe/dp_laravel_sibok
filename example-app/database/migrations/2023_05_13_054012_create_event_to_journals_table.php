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
        Schema::create('event_to_journals', function (Blueprint $table) {
           $table->id();
// хз
            $table->unsignedBigInteger('id_journal')->nullable();

            $table->index('id_journal', 'event_journal_idx');

            $table->foreign('id_journal', 'event_journal_fk')->on('journals')->references('id');

            $table->unsignedBigInteger('id_event')->nullable();
            $table->index('id_event', 'journal_event_idx');
            $table->foreign('id_event', 'journal_event_fk')->on('events')->references('id');

            $table->unsignedBigInteger('amount')-> nullable();

            $table->boolean('is_okay')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_to_journals');
    }
};
