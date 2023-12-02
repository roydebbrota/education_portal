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
        Schema::create('campuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('institute_id');
            $table->string('address');
            // $table->string('location');
            $table->string('city');
            $table->string('country');
            $table->string('living_cost');
            // $table->string('intake');
            // $table->string('intake_deadline');
            // $table->string('appl_fees');
            // $table->string('yearly_fees');
            // $table->string('offer_time');
            // $table->string('min_deposit');
            // $table->string('scholarship');
            // $table->string('study_gap');
            // $table->string('double_masters_bachelor');
            // $table->string('regional_restriction');
            // $table->string('credibility_interview');
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
        Schema::dropIfExists('campuses');
    }
};
