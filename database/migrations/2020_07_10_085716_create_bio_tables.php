<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_bios', function (Blueprint $birth_bio) {
            $birth_bio->increments('id');
            $birth_bio->date('date');
            $birth_bio->string('country');
            $birth_bio->string('city');
            $birth_bio->string('adress');
            $birth_bio->string('notes');
            $birth_bio->boolean('dead')->default(0);
            $birth_bio->timestamps();
            $birth_bio->engine = 'InnoDB';

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birth_bios');
    }
}
