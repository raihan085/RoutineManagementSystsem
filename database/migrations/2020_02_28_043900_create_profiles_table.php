<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
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
            $table->string('Photo')->nullable()->default('defaultProfilePicture.png')->nullable();
            $table->string('Email')->unique();
            $table->string('password');

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
        Schema::dropIfExists('profiles');
    }
}
