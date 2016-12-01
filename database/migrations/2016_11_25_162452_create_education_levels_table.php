<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_levels', function (Blueprint $table){
            $table->increments('id');
            $table->integer('el_emp_id', false, true)->unsigned();
            $table->string('el_level_edu')->nullable();
            $table->string('el_school')->nullable();
            $table->string('el_country')->nullable();
            $table->string('el_degree')->nullable();
            $table->dateTime('el_start_date')->nullable();
            $table->dateTime('el_end_date')->nullable();
            $table->string('el_others')->nullable();
            $table->string('el_custom1')->nullable();
            $table->string('el_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('el_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_levels');
    }
}
