<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('att_emp_id', false, true)->unsigned();
            $table->enum('att_type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->string('att_url')->nullable();
            $table->longText('att_description')->nullable();
            $table->string('att_others')->nullable();
            $table->string('att_custom1')->nullable();
            $table->string('att_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('att_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
