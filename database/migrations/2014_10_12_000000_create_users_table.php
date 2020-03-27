<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');

            $table->string('FullName');
            $table->string('ShortName')->nullable();
            $table->string('RegistrationNumber')->unique();
            $table->string('Type');
            $table->longtext('Designation')->nullable();
            $table->string('Session')->nullable();
            $table->string('Section')->nullable();
            $table->string('RoomNumber')->nullable();
            $table->string('PhoneNumber')->unique();
            $table->string('Photo')->nullable()->default('defaultProfilePicture.png');
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
