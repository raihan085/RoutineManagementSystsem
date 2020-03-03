<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Day');
            $table->string('YrToSe');
            $table->string('EightToNine')->nullabel();
            $table->string('NineToTen')->nullabel();
            $table->string('TenToEleven')->nullabel();
            $table->string('ElevenToTwelve')->nullabel();
            $table->string('TwelveToOne')->nullabel();
            $table->string('OneToTwo')->nullabel();
            $table->string('TwoToThree')->nullabel();
            $table->string('ThreeToFour')->nullabel();
            $table->string('FourToFive')->nullabel();
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
        Schema::dropIfExists('main_routines');
    }
}
