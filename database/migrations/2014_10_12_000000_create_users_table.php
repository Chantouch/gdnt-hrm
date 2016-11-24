<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //storing for user login to their info
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            //Personal info
            $table->integer('emp_id')->nullable();
            $table->integer('id_notice_emp')->nullable();
            $table->integer('department_id', false, true)->unsigned()->nullable();
            $table->string('full_name')->nullable();
            $table->string('fn_en')->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->default('others');
            $table->date('dob')->default(Carbon::now());
            $table->enum('marital_status', ['Single', 'Unmarried', 'Married', 'Divorcee', 'Widow']);
            $table->string('nationality')->default('ខ្មែរ');
            $table->string('ethnic')->comment('Ethnic of people in state')->default('ខ្មែរ');
            $table->string('place_of_birth')->default('ភ្នំពេញ');
            $table->string('email_1')->nullable();
            $table->string('email_2')->nullable();
            $table->string('mobile_phone')->default('070375783');
            $table->string('work_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('id_card')->nullable();
            $table->dateTime('card_expired')->nullable();
            $table->string('passport')->nullable();
            $table->dateTime('passport_expired')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('department_id')->references('id')->on('departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
