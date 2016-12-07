<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryPrivateJobTable extends Migration
{
    public function up()
    {
        Schema::create('history_private_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hpj_emp_id', false, true)->unsigned();
            $table->string('hpj_department')->nullable();
            $table->string('hpj_ministry_institute')->nullable();
            $table->string('hpj_occupation')->nullable();
            $table->dateTime('hpj_start_date')->nullable();
            $table->dateTime('hpj_end_date')->nullable();
            $table->string('hpj_others')->nullable();
            $table->string('hpj_custom1')->nullable();
            $table->string('hpj_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('hpj_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_private_jobs');
    }
}
