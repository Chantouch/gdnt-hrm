<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('child_emp_id', false, true)->unsigned();
            $table->string('child_job_department')->nullable();
            $table->string('child_full_name')->nullable();
            $table->string('child_fn_en')->nullable();
            $table->enum('child_gender', ['MALE', 'FEMALE', 'OTHERS']);
            $table->string('child_nationality')->nullable();
            $table->string('child_ethnic')->nullable();
            $table->dateTime('child_dob')->nullable()->comment('Date of birth');
            $table->string('child_pob')->nullable()->comment('Place of birth');
            $table->string('child_address')->nullable();
            $table->string('child_job')->nullable();
            $table->tinyInteger('child_subsidy')->default(1);
            $table->string('child_others')->nullable();
            $table->string('child_custom1')->nullable();
            $table->string('child_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('child_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
