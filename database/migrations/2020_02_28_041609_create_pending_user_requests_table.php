<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingUserRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_user_requests', function (Blueprint $table) {
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
            $table->string('Photo')->default('defaultProfilePicture.png')->nullable();
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
        Schema::dropIfExists('pending_user_requests');
    }
}
