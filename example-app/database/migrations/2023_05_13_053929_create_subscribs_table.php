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
        Schema::create('subscribs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_subscribers')->nullable();
            $table->index('id_subscribers', 'subscrip_subscribers_idx');
            $table->foreign('id_subscribers', 'subscrip_subscribers_fk')->on('subscribers')->references('id');
            $table->unsignedBigInteger('id_categories')->nullable();
            $table->index('id_categories', 'subscrip_categories_idx');
            $table->foreign('id_categories', 'subscrip_categories_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('id_workers')->nullable();
            $table->index('id_workers', 'subscrip_workers_idx');
            $table->foreign('id_workers', 'subscrip_workers_fk')->on('users')->references('id');

            $table->dateTime('date_start')-> nullable();
            $table->dateTime('date_end')-> nullable();     
            $table->string('adress')-> nullable();
            $table->unsignedBigInteger('amount')-> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribs');
    }
};
