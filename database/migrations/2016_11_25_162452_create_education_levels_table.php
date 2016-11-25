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
            $table->integer('emp_id', false, true)->unsigned();
            $table->string('level_edu')->nullable();
            $table->string('school')->nullable();
            $table->string('country')->nullable();
            $table->string('degree')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
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
        Schema::dropIfExists('education_levels');
    }
}
