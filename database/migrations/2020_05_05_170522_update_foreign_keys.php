<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	
        Schema::table('tbl_feed_subcategory', function (Blueprint $table) {
            //
	    $table->foreign('fk_feed_category_id')->references('feed_category_id')
	    	->on('tbl_feed_category')
		->onUpdate('cascade')
		->onDelete('cascade');
        });
	
        Schema::table('tbl_feed', function (Blueprint $table) {
            //
	    $table->foreign('fk_seller_id')->references('seller_id')->on('tbl_seller')
	    	->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_feed_subcategory', function (Blueprint $table) {
            //
        });
        Schema::table('tbl_feed', function (Blueprint $table) {
            //
        });

    }
}
