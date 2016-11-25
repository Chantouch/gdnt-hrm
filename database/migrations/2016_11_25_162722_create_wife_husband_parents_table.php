<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWifeHusbandParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wife_husband_parents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id', false, true)->unsigned();
            $table->string('department')->nullable();
            $table->string('full_name')->nullable();
            $table->string('fn_en')->nullable();
            $table->enum('type', ['WIFE', 'HUSBAND', 'FATHER', 'MOTHER']);
            $table->string('nationality')->nullable();
            $table->string('ethnic')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('job')->nullable();
            $table->tinyInteger('subsidy');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('wife_husband_parents');
    }
}
