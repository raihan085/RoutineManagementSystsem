<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ShortName');
            $table->string('Email');
            $table->string('YearToSemester');
            $table->string('Section');
            $table->string('CourseCode');
            $table->string('Time');
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
        Schema::dropIfExists('pending_classes');
    }
}
