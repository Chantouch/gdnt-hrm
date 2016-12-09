<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_courses', function (Blueprint $table){
            $table->increments('id');
            $table->integer('courses_emp_id', false, true)->unsigned();
            $table->string('courses_level_edu')->nullable();
            $table->string('courses_school')->nullable();
            $table->string('courses_country')->nullable();
            $table->string('courses_degree')->nullable();
            $table->dateTime('courses_start_date')->nullable();
            $table->dateTime('courses_end_date')->nullable();
            $table->string('courses_others')->nullable();
            $table->string('courses_custom1')->nullable();
            $table->string('courses_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('courses_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_courses');
    }
}
