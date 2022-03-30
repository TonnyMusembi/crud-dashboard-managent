<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMombasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mombasas', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('type');
            $table->timestamps();
            // Schema::table('nairobis', function (Blueprint $table) {
            //     $table->foreign('id_mombasas')->references('id')->on('mombasas')->onDelete('cascade')->onUpdate('cascade');
            // });
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mombasas');
    }
}
