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
            $table->integer('emp_id', false, true)->unsigned();
            $table->integer('doc_number')->nullable();
            $table->dateTime('published_date')->nullable();
            $table->string('department')->nullable();
            $table->longText('description')->nullable();
            $table->enum('type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->enum('punish_type', ['A', 'B', 'C', 'E', 'F', 'G']);
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
        Schema::dropIfExists('award_punishments');
    }
}
