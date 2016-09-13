<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position')->unsigned();
            $table->string('schlagwort');
            $table->text('frage');
            $table->text('antwort');
            $table->text('referenz');
            $table->integer('kategorie_id')->unsigned();
            $table->foreign('kategorie_id')->references('id')->on('kategorie')->onDelete('cascade');
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
         Schema::drop('faq');
    }

}
