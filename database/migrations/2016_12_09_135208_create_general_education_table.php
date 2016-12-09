<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_educations', function (Blueprint $table){
            $table->increments('id');
            $table->integer('ge_emp_id', false, true)->unsigned();
            $table->string('ge_level_edu')->nullable();
            $table->string('ge_school')->nullable();
            $table->string('ge_country')->nullable();
            $table->string('ge_degree')->nullable();
            $table->dateTime('ge_start_date')->nullable();
            $table->dateTime('ge_end_date')->nullable();
            $table->string('ge_others')->nullable();
            $table->string('ge_custom1')->nullable();
            $table->string('ge_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ge_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_educations');
    }
}
