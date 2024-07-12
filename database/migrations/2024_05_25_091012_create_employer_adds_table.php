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
        Schema::create('employer_adds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employments_id');
            $table->string('company2');
            $table->string('address2');
            $table->string('city2');
            $table->string('post_code2')->nullable();;
            $table->string('state2');
            $table->string('cphone2');
            $table->string('designation2')->nullable();;
            $table->string('department2')->nullable();;
            $table->string('ctc2');
            $table->string('empid2')->nullable();;
            $table->string('doj2')->nullable();;
            $table->string('doe2');
            $table->string('reason2');
            $table->string('emp_type2');
            $table->string('emp_nature2');
            $table->string('exp_letter2');
            $table->string('offer_letter2');
            $table->string('last_salary2');
            $table->string('supervisor1_name2');
            $table->string('supervisor1_phone2');
            $table->string('supervisor1_email2');
            $table->string('supervisor2_name2');
            $table->string('supervisor2_phone2');
            $table->string('supervisor2_email2');
            $table->string('company3');
            $table->string('address3');
            $table->string('city3');
            $table->string('post_code3');
            $table->string('state3');
            $table->string('cphone3');
            $table->string('designation3');
            $table->string('department3');
            $table->string('ctc3');
            $table->string('empid3');
            $table->string('doj3');
            $table->string('doe3');
            $table->string('reason3');
            $table->string('emp_type3')->nullable();;
            $table->string('emp_nature3');
            $table->string('exp_letter3');
            $table->string('offer_letter3');
            $table->string('last_salary3');
            $table->string('supervisor1_name3');
            $table->string('supervisor1_phone3');
            $table->string('supervisor1_email3');
            $table->string('supervisor2_name3');
            $table->string('supervisor2_phone3');
            $table->string('supervisor2_email3');
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_adds');
    }
};
