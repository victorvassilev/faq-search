<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategorie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kz');
            $table->string('kategorie');
            $table->timestamps();
        });
        
        Artisan::call('db:seed', array('--class' => 'KategorienSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kategorie');
    }

}
