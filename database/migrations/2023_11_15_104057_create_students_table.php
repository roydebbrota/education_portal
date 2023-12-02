<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->enum('salutation', ['Mr.', 'Mrs.', 'Ms.', 'Dr.', 'Prf.']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->string('phone')->unique();
            $table->string('language');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Engaged', 'De Facto', 'Separated', 'Widowed', 'Never married or been in a de facto relationship']);
            $table->string('country_of_birth');
            $table->string('passport_number');
            $table->string('country_of_passport');
            $table->date('passport_expiry_date');
            $table->string('current_student_location');
            $table->enum('age_eighteen_or_not', ['Yes', 'No']);
            $table->string('street_address');
            $table->string('address_line_two')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('state');
            $table->enum('status', ['Active', 'Inactive', 'Completed'])->default('Active');
            $table->integer('recruiter');
            // $table->integer('qualification_name_id');
            // $table->string('name_of_institution');
            // $table->string('name_of_program');
            // $table->string('country_of_institution');
            // $table->string('language_of_institution');
            // $table->enum('program_completed', ['Yes', 'No']);
            // $table->date('beginning_date');
            // $table->date('completion_date');
            // $table->string('grading_system');
            // $table->string('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
