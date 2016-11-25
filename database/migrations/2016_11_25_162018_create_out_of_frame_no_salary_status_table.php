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
            $table->integer('emp_id', false, true)->unsigned();
            $table->string('department')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->enum('type', ['Out Of Frame', 'Freedom No Salary']);
            $table->string('others')->nullable();
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
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
