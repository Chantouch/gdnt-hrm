<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ll_emp_id', false, true)->unsigned();
            $table->integer('ll_lang_id', false, true)->unsigned();
            $table->enum('ll_read', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('ll_write', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('ll_listen', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('ll_speak', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->string('ll_others')->nullable();
            $table->string('ll_custom1')->nullable();
            $table->string('ll_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ll_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_levels');
    }
}
