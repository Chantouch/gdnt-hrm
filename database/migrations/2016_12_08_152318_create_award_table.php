<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aw_emp_id', false, true)->unsigned();
            $table->integer('aw_doc_number')->nullable();
            $table->dateTime('aw_published_date')->nullable();
            $table->string('aw_department')->nullable();
            $table->longText('aw_description')->nullable();
            $table->enum('aw_type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->string('aw_others')->nullable();
            $table->string('aw_custom1')->nullable();
            $table->string('aw_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('aw_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
    }
}
