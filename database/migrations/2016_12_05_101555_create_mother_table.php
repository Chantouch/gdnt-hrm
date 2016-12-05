<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('m_emp_id', false, true)->unsigned();
            $table->string('m_department')->nullable();
            $table->string('m_full_name')->nullable();
            $table->string('m_fn_en')->nullable();
            $table->string('m_nationality')->nullable();
            $table->string('m_ethnic')->nullable();
            $table->dateTime('m_dob')->nullable();
            $table->string('m_pob')->nullable()->comment('Place of birth');
            $table->string('m_address')->nullable();
            $table->string('m_job')->nullable();
            $table->enum('m_status', ['l', 'd']);
            $table->string('m_others')->nullable();
            $table->string('m_custom1')->nullable();
            $table->string('m_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('m_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mothers');
    }
}
