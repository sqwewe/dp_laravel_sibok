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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('name')-> nullable();

            $table->dateTime('date')-> nullable();

            $table->unsignedBigInteger('id_worker')->nullable();
            $table->index('id_worker', 'subscrip_worker_idx');
            $table->foreign('id_worker', 'subscrip_worker_fk')->on('users')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
