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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone');
            $table->string('gender');
            $table->date('birthdate');
            $table->foreignId('religion_id')->constrained()->onDelete('cascade');
            $table->text('addres');
            $table->string('village');
            $table->string('subdistrict');
            $table->string('city');
            $table->string('province');
            $table->string('postcode');
            $table->text('origin_school');
            $table->string('graduation_year');
            $table->string('student_number');
            $table->string('identity_number');
            $table->string('parents_name');
            $table->string('parents_phone');
            $table->foreignId('job_id')->constrained()->onDelete('cascade');
            $table->string('certificate_of_birth');
            $table->string('family_card');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
