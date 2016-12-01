<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstStateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_state_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fsj_emp_id', false, true)->unsigned();
            $table->integer('fsj_office_id', false, true)->unsigned();
            $table->integer('fsj_department_unit_id', false, true)->unsigned();
            $table->integer('fsj_department_id', false, true)->unsigned();
            $table->integer('fsj_ministry_id', false, true)->unsigned();
            $table->integer('fsj_occupation_id', false, true)->unsigned();
            $table->integer('fsj_frame_id', false, true)->unsigned();
            $table->string('fsj_others')->nullable();
            $table->string('fsj_custom1')->nullable();
            $table->string('fsj_custom2')->nullable();
            $table->dateTime('fsj_permanent_staff_date')->nullable();
            $table->dateTime('fsj_start_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fsj_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_office_id')->references('id')->on('offices')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_department_unit_id')->references('id')->on('department_units')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_ministry_id')->references('id')->on('ministries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_occupation_id')->references('id')->on('occupations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fsj_frame_id')->references('id')->on('frames')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_state_jobs');
    }
}
