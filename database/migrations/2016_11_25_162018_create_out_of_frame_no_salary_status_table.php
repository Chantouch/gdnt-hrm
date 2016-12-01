<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutOfFrameNoSalaryStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_of_frame_no_salary_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fn_emp_id', false, true)->unsigned();
            $table->string('fn_department')->nullable();
            $table->dateTime('fn_start_date')->nullable();
            $table->dateTime('fn_end_date')->nullable();
            $table->enum('fn_type', ['Out Of Frame', 'Freedom No Salary']);
            $table->string('fn_others')->nullable();
            $table->string('fn_custom1')->nullable();
            $table->string('fn_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('fn_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_of_frame_no_salary_status');
    }
}
