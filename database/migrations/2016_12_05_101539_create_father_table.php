<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fathers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('f_emp_id', false, true)->unsigned();
            $table->string('f_department')->nullable();
            $table->string('f_full_name')->nullable();
            $table->string('f_fn_en')->nullable();
            $table->string('f_nationality')->nullable();
            $table->string('f_ethnic')->nullable();
            $table->dateTime('f_dob')->nullable()->comment('Date of birth');
            $table->string('f_pob')->nullable()->comment('Place of birth');
            $table->string('f_address')->nullable();
            $table->string('f_job')->nullable();
            $table->enum('f_status', ['l', 'd']);
            $table->string('f_others')->nullable();
            $table->string('f_custom1')->nullable();
            $table->string('f_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('f_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fathers');
    }
}
