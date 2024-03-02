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
        Schema::create('appointments_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('priest_id');

            $table->string('confessor_name');
            $table->string('phone_number');
            $table->date('date');
            $table->time('time');
            $table->integer('slot_count');
            $table->string('status');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments_histories');
    }
};
