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
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('contery');
            $table->string('gender');
            $table->string('unmarried');
            $table->string('phone');
            $table->string('email');
            $table->string('dob');
            $table->string('f_name');
            $table->string('identification');
            $table->string('identification_type');
            $table->string('aadhar');
            $table->string('pancerd');
            $table->string('hose_no');
            $table->string('building');
            $table->string('lane');
            $table->string('sector');
            $table->string('district');
            $table->string('city');
            $table->string('postal');
            $table->string('state');
            $table->string('period_stay');
            $table->string('land_mark');
            $table->string('contact');
            $table->string('contact2');
            $table->string('attach_aggrment');
            $table->enum('status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_informations');
    }
};
