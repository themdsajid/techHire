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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('emp_id');
            $table->string('address');
            $table->unsignedBigInteger('compy_id');
            $table->enum('status',['0','1'])->default('0');
            $table->timestamps();
            $table->foreign('compy_id')->references('id')->on('users')->ondelite('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
