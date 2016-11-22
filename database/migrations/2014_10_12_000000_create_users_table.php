<?php

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
            $table->integer('emp_id', 10);
            $table->integer('id_notice_emp', 4)->nullable();
            $table->integer('department_id', 4)->nullable();
            $table->string('full_name', 150);
            $table->string('fn_en', 150)->nullable();
            $table->enum('gender', ['male', 'female', 'others']);
            $table->date('dob');
            $table->enum('marital_status', ['Single', 'Unmarried', 'Married', 'Divorcee', 'Widow']);
            $table->string('nationality')->comment('សញ្ជាជាតិ');
            $table->string('ethnic')->comment('Ethnic of people in state (ជនជាតិ)');
            $table->string('place_of_birth');
            $table->string('email');
            $table->string('mobile_phone');
            $table->string('work_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('id_card', 15);
            $table->dateTime('card_expired');
            $table->string('passport');
            $table->dateTime('passport_expired');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
