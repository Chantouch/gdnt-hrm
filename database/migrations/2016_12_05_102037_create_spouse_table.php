<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sp_emp_id', false, true)->unsigned();
            $table->string('sp_department')->nullable();
            $table->string('sp_full_name')->nullable();
            $table->string('sp_fn_en')->nullable();
            $table->string('sp_nationality')->nullable();
            $table->string('sp_ethnic')->nullable();
            $table->dateTime('sp_dob')->nullable()->comment('Date of birth');
            $table->string('sp_pob')->nullable()->comment('Place of birth');
            $table->string('sp_address')->nullable();
            $table->string('sp_job')->nullable();
            $table->string('sp_hand_phone')->nullable()->comment('Mobile phone that they carry on everyday');
            $table->string('sp_work_phone')->nullable()->comment('Phone at office');
            $table->string('sp_home_phone')->nullable()->comment('Phone at home that can contact to their relative');
            $table->tinyInteger('sp_subsidy');
            $table->enum('sp_status', ['l', 'd']);
            $table->string('sp_others')->nullable();
            $table->string('sp_custom1')->nullable();
            $table->string('sp_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sp_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spouses');
    }
}
