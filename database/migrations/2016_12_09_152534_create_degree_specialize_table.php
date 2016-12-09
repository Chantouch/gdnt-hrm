<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreeSpecializeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degree_specializes', function (Blueprint $table){
            $table->increments('id');
            $table->integer('ds_emp_id', false, true)->unsigned();
            $table->string('ds_level_edu')->nullable();
            $table->string('ds_school')->nullable();
            $table->string('ds_country')->nullable();
            $table->string('ds_degree')->nullable();
            $table->dateTime('ds_start_date')->nullable();
            $table->dateTime('ds_end_date')->nullable();
            $table->string('ds_others')->nullable();
            $table->string('ds_custom1')->nullable();
            $table->string('ds_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ds_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degree_specializes');
    }
}
