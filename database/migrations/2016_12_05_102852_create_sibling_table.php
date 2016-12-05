<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiblingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siblings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sib_emp_id', false, true)->unsigned();
            $table->string('sib_job_department')->nullable();
            $table->string('sib_full_name')->nullable();
            $table->string('sib_fn_en')->nullable();
            $table->enum('sib_gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('sib_nationality')->nullable();
            $table->string('sib_ethnic')->nullable();
            $table->dateTime('sib_dob')->nullable();
            $table->string('sib_place_of_birth')->nullable();
            $table->string('sib_address')->nullable();
            $table->string('sib_job')->nullable();
            $table->string('sib_others')->nullable();
            $table->string('sib_custom1')->nullable();
            $table->string('sib_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sib_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siblings');
    }
}
