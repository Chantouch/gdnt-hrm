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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            //Personal info
            $table->integer('emp_id')->unique();
            $table->integer('department_code')->nullable();
            $table->integer('id_notice_emp')->nullable();
            $table->string('full_name')->nullable();
            $table->string('fn_en')->nullable();
            $table->enum('gender', ['m', 'f', 'o'])->comment('m=>male, f->female, o=>others');
            $table->enum('marital_status', ['s', 'm', 'd', 'w'])->comment('s=>single, m=>married, d->divorcee, w=>widow');
            $table->string('nationality')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('place_of_birth')->nullable()->comment('Place where employer born');
            $table->string('current_address')->nullable()->comment('Place where employer live');
            $table->string('dob')->nullable()->comment('Date of birth of employer born');
            $table->string('email1')->unique()->nullable();
            $table->string('email2')->unique()->nullable();
            $table->string('cover_photo')->unique()->comment('use in front of the page to show their face')->nullable();
            $table->string('hand_phone')->unique()->nullable()->comment('Mobile phone that they carry on everyday');
            $table->string('work_phone')->nullable()->comment('Phone at office');
            $table->string('home_phone')->nullable()->comment('Phone at home that can contact to their relative');
            $table->integer('id_card')->nullable()->unique()->comment('The Khmer Identity card holder');
            $table->dateTime('id_card_expired')->nullable()->comment('The date of expiration card');
            $table->string('passport')->nullable()->comment('A book that use to go abroad');
            $table->dateTime('passport_expired_date')->nullable()->comment('Date of expiration passport');
            $table->string('others')->nullable()->comment('Others comment for this fields');
            $table->string('custom1')->nullable();
            $table->string('custom2')->nullable();
            $table->tinyInteger('active')->nullable()->default('0');

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
