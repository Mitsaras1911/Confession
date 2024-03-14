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
            $table->string('rank');//
            $table->string('name');
            $table->string('surname');
            $table->string('churchName');
            $table->string('parish');
            $table->integer('age');
            $table->string('phoneNumber');
            $table->boolean('verifiedByAdmin')->default(FALSE);
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
