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
            $table->integer('emp_id', false, true)->unsigned();
            $table->integer('lang_id', false, true)->unsigned();
            $table->enum('read', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('write', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('listen', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->enum('speak', ['Beginner', 'Conversation', 'Business', 'Fluent', 'Mother Tongue']);
            $table->string('others')->nullable();
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
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
