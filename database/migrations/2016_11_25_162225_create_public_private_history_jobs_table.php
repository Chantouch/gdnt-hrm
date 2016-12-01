<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicPrivateHistoryJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_private_history_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phj_emp_id', false, true)->unsigned();
            $table->string('phj_department')->nullable();
            $table->string('phj_ministry_institute')->nullable();
            $table->string('phj_occupation')->nullable();
            $table->dateTime('phj_start_date')->nullable();
            $table->dateTime('phj_end_date')->nullable();
            $table->enum('phj_type', ['Private', 'Public']);
            $table->string('phj_others')->nullable();
            $table->string('phj_custom1')->nullable();
            $table->string('phj_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('phj_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_private_history_jobs');
    }
}
