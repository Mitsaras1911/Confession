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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('priest_id');//RELATION WITH PRIESTS TABLE
            $table->string('confessor_name');
            $table->string('response_message')->nullable();
            $table->string('phone_number');
            $table->string('date');
            $table->string('time');
            $table->integer('slot_count');
            $table->string('status');//Approoved,Pending,Declined

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
