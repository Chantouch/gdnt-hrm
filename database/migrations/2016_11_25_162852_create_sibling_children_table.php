<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiblingChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sibling_children', function (Blueprint $table){
            $table->increments('id');
            $table->integer('emp_id', false, true)->unsigned();
            $table->string('job_department')->nullable();
            $table->string('full_name')->nullable();
            $table->string('fn_en')->nullable();
            $table->enum('type', ['CHILD', 'SIBLING']);
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('nationality')->nullable();
            $table->string('ethnic')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('job')->nullable();
            $table->tinyInteger('subsidy');
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
        Schema::dropIfExists('sibling_children');
    }
}
