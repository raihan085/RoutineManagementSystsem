<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateTeacherRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_teacher_routines', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Day');
            $table->string('ShortName');
            $table->string('EightToNine')->nullable();
            $table->string('NineToTen')->nullable();
            $table->string('TenToEleven')->nullable();
            $table->string('ElevenToTwelve')->nullable();
            $table->string('TwelveToOne')->nullable();
            $table->string('OneToTwo')->nullable();
            $table->string('TwoToThree')->nullable();
            $table->string('ThreeToFour')->nullable();
            $table->string('FourToFive')->nullable();

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
        Schema::dropIfExists('update_teacher_routines');
    }
}
