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
        Schema::create('priests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');//FOR AUTHENTICATION
            $table->integer('rank');//
            $table->string('name');
            $table->string('surname');
            $table->string('church_name');
            $table->string('parish');
            $table->integer('age');
            $table->string('phone_number');
            $table->boolean('verified_by_admin');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priests');
    }
};
