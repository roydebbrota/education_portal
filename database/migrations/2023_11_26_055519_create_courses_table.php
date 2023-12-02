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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('catagory_id');
            $table->integer('sub_catagory_id');
            $table->string('country');
            $table->integer('type_id');
            $table->longText('about');
            $table->string('intake_months');
            $table->string('qualification');
            $table->string('level');
            $table->string('duration');
            $table->string('delivery_location');
            $table->string('course_fee');
            $table->string('post_study_visa')->nullable();
            $table->string('cricos')->nullable();
            $table->string('ielts')->nullable();
            $table->string('toefl')->nullable();
            $table->string('pte')->nullable();
            $table->integer('institute_id');
            $table->integer('campuses_id');
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
        Schema::dropIfExists('courses');
    }
};
