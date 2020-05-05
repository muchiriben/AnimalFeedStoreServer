<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feed_subcategory', function (Blueprint $table) {
            $table->bigIncrements('feed_subcategory_id');
	    $table->string('feed_subcategory_title');
	    $table->text('feed_subcategory_description');
	    $table->unsignedBigInteger('fk_feed_category_id');
	    $table->boolean('status');
	    $table->dateTime('created_at', 0)->now();
	    $table->dateTime('updated_at', 0)->now();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_feed_subcategory');
    }
}
