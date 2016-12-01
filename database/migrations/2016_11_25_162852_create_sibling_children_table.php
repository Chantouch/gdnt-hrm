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
            $table->integer('sc_emp_id', false, true)->unsigned();
            $table->string('sc_job_department')->nullable();
            $table->string('sc_full_name')->nullable();
            $table->string('sc_fn_en')->nullable();
            $table->enum('sc_type', ['CHILD', 'SIBLING']);
            $table->enum('sc_gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('sc_nationality')->nullable();
            $table->string('sc_ethnic')->nullable();
            $table->dateTime('sc_dob')->nullable();
            $table->string('sc_place_of_birth')->nullable();
            $table->string('sc_address')->nullable();
            $table->string('sc_job')->nullable();
            $table->tinyInteger('sc_subsidy');
            $table->string('sc_others')->nullable();
            $table->string('sc_custom1')->nullable();
            $table->string('sc_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sc_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
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
