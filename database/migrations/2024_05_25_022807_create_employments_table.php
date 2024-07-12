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
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('emp_id');
            $table->string('email');
            $table->string('user_id');
            $table->string('company1');
            $table->string('address1');
            $table->string('city1');
            $table->string('post_code1');
            $table->string('state1');
            $table->string('cphone1');
            $table->string('designation1')->nullable();;
            $table->string('department1')->nullable();;
            $table->string('ctc1')->nullable();;
            $table->string('empid1')->nullable();;
            $table->string('doj1')->nullable();;
            $table->string('doe1')->nullable();;
            $table->string('reason1')->nullable();;
            $table->string('emp_type1')->nullable();;
            $table->string('emp_nature1')->nullable();;
            $table->string('exp_letter1');
            $table->string('offer_letter1');
            $table->string('last_salary1');
            $table->string('supervisor1_name1');
            $table->string('supervisor1_phone1');
            $table->string('supervisor1_email1');
            $table->string('supervisor2_name1');
            $table->string('supervisor2_phone1');
            $table->string('supervisor2_email1');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};
