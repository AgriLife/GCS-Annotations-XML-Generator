<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SearchesSites extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches_sites', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('search_id')->unsigned();
			$table->integer('site_id')->unsigned();
            $table->timestamps();
            $table->foreign('search_id')->references('id')->on('searches');
            $table->foreign('site_id')->references('id')->on('sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('searches_sites');
    }

}
