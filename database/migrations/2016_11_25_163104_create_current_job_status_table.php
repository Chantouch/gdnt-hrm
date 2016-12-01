<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentJobStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_job_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cjs_emp_id', false, true)->unsigned();
            $table->integer('cjs_frame_id', false, true)->usnigned();
            $table->integer('cjs_occupation_id', false, true)->unisgned();
            $table->integer('cjs_department_id', false, true)->unsigned();
            $table->integer('cjs_department_unit_id', false, true)->unsigned();
            $table->integer('cjs_office_id', false, true)->unsigned();
            $table->string('cjs_others')->nullable();
            $table->dateTime('cjs_last_date_promoted')->nullable();
            $table->dateTime('cjs_last_date_got_promoted')->nullable();
            $table->string('cjs_custom1')->nullable();
            $table->string('cjs_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cjs_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cjs_frame_id')->references('id')->on('frames')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cjs_occupation_id')->references('id')->on('occupations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cjs_department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cjs_department_unit_id')->references('id')->on('department_units')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cjs_office_id')->references('id')->on('offices')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_job_status');
    }
}
