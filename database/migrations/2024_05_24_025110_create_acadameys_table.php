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
        Schema::create('acadameys', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('board10th');
            $table->string('passing10');
            $table->string('board12th');
            $table->string('passing12');
            $table->string('pdf10th');
            $table->string('pdf12th');
            $table->string('qualification');
            $table->string('specialization');
            $table->string('institute');
            $table->string('board');
            $table->string('enrolment');
            $table->string('study_from');
            $table->string('study_to');
            $table->string('passingyear');
            $table->string('graduated');
            $table->string('cattended');
            $table->string('highest_degree');
            $table->string('emp_type');
            $table->enum('status',['0','1'])->default('0');
            $table->unsignedBigInteger('prnalinfo_id');
            $table->foreign('prnalinfo_id')->references('id')->on('personal_informations')->ondelite('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acadameys');
    }
};
