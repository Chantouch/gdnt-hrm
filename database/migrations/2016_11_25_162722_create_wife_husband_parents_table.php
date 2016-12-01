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
            $table->integer('whp_emp_id', false, true)->unsigned();
            $table->string('whp_department')->nullable();
            $table->string('whp_full_name')->nullable();
            $table->string('whp_fn_en')->nullable();
            $table->enum('whp_type', ['WIFE', 'HUSBAND', 'FATHER', 'MOTHER']);
            $table->string('whp_nationality')->nullable();
            $table->string('whp_ethnic')->nullable();
            $table->dateTime('whp_dob')->nullable();
            $table->string('whp_place_of_birth')->nullable();
            $table->string('whp_address')->nullable();
            $table->string('whp_job')->nullable();
            $table->tinyInteger('whp_subsidy');
            $table->tinyInteger('whp_status');
            $table->string('whp_others')->nullable();
            $table->string('whp_custom1')->nullable();
            $table->string('whp_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('whp_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
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
