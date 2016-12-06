<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoSalaryStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_salary_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nss_emp_id', false, true)->unsigned();
            $table->string('nss_department')->nullable();
            $table->dateTime('nss_start_date')->nullable();
            $table->dateTime('nss_end_date')->nullable();
            $table->string('nss_others')->nullable();
            $table->string('nss_custom1')->nullable();
            $table->string('nss_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('nss_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('no_salary_status');
    }
}
