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
            $table->integer('emp_id', false, true)->unsigned();
            $table->integer('frame_id', false, true)->usnigned();
            $table->integer('occupation_id', false, true)->unisgned();
            $table->integer('department_id', false, true)->unsigned();
            $table->integer('office_id', false, true)->unsigned();
            $table->string('others')->nullable();
            $table->dateTime('last_date_promoted')->nullable();
            $table->dateTime('last_date_got_promoted')->nullable();
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('frame_id')->references('id')->on('frames')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('occupation_id')->references('id')->on('occupations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('office_id')->references('id')->on('offices')->onUpdate('cascade')->onDelete('cascade');
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
