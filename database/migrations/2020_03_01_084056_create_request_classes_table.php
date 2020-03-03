<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_classes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Day');
            $table->string('RegistrationNumber');
            $table->string('ShortName');
            $table->string('EightToNine');
            $table->string('NineToTen');
            $table->string('TenToEleven');
            $table->string('ElevenToTwelve');
            $table->string('TwelveToOne');
            $table->string('OneToTwo');
            $table->string('TwoToThree');
            $table->string('ThreeToFour');
            $table->string('FourToFive');

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
        Schema::dropIfExists('request_classes');
    }
}
