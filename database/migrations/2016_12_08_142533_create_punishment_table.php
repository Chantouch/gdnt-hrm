<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePunishmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punishments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pun_emp_id', false, true)->unsigned();
            $table->integer('pun_doc_number')->nullable();
            $table->dateTime('pun_published_date')->nullable();
            $table->string('pun_department')->nullable();
            $table->longText('pun_description')->nullable();
            $table->enum('pun_punish_type', ['A', 'B', 'C', 'E', 'F', 'G']);
            $table->string('pun_others')->nullable();
            $table->string('pun_custom1')->nullable();
            $table->string('pun_custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pun_emp_id')->references('id')->on('employers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punishments');
    }
}
