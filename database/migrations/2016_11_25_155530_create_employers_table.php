<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emp_id')->unique();
            $table->integer('department_code')->nullable();
            $table->string('full_name')->nullable();
            $table->string('fn_en')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER']);
            $table->enum('marital_status', ['Single', 'Married', 'Divorcee', 'Window']);
            $table->string('nationality')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('email')->unique();
            $table->string('email1')->unique()->nullable();
            $table->string('email2')->unique()->nullable();
            $table->string('cover_photo')->unique();
            $table->string('hand_phone')->unique()->nullable();
            $table->string('work_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->integer('id_card')->nullable()->unique();
            $table->dateTime('id_card_expired')->nullable();
            $table->string('passport')->nullable();
            $table->dateTime('passport_expired_date')->nullable();
            $table->string('others')->nullable();
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
}
