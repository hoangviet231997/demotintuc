<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post',function ($table) {
            $table->increments('id');
            $table->integer('categori_id')->unsigned();
            $table->foreign('categori_id')->references('id')->on('categories');
            $table->string('ten',255);
            $table->string('noi_dung_rut_gon',255);
            $table->string('noi_dung',255);
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
        //
    }
}
