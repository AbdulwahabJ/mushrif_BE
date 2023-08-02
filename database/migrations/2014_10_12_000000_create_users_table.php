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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('national_id')->nullable();
            $table->String('password');
            $table->String('full_name')->nullable();
            $table->String('personal_photo')->nullable();
            $table->String('phone_number')->nullable();
            $table->String('email');
            $table->enum('type',['techsupervisor_id','fieldsupervisor_id'])->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
