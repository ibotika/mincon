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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('prc_number')->nullable();
            $table->string('prc_expiration_date')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('chapter')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('need_transporation')->nullable();
            $table->string('dental_practice_type')->nullable();
            $table->string('registration_type')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->string('proof_of_transaction')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
