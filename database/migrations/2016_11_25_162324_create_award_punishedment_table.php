<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardPunishedmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_punishments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ap_emp_id', false, true)->unsigned();
            $table->integer('ap_doc_number')->nullable();
            $table->dateTime('ap_published_date')->nullable();
            $table->string('ap_department')->nullable();
            $table->longText('ap_description')->nullable();
            $table->enum('ap_type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->enum('ap_punish_type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->string('ap_others')->nullable();
            $table->string('ap_custom1')->nullable();
            $table->string('ap_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ap_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_punishments');
    }
}
