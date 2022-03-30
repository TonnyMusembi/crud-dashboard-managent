<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNairobisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nairobis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('oders');
            $table->string('type');
            $table->bigInteger('adress')->unsigned();
            $table->longText('area');
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
        Schema::dropIfExists('nairobis');
    }
}
