<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddOnCurrentPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_on_current_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acp_emp_id', false, true)->unsigned();
            $table->string('acp_position')->nullable();
            $table->string('acp_equal_position')->nullable();
            $table->dateTime('acp_start_date')->nullable();
            $table->string('acp_department')->nullable();
            $table->string('acp_others')->nullable();
            $table->string('acp_custom1')->nullable();
            $table->string('acp_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('acp_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_on_current_positions');
    }
}
