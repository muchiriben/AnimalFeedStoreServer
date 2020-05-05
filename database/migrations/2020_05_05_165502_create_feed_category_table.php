<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feed_category', function (Blueprint $table) {
            $table->bigIncrements('feed_category_id');
	    $table->string('feed_category_title');
	    $table->text('feed_category_description');
	    $table->boolean('status');
	    $table->dateTime('created_at', 0)->useCurrent();
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
        Schema::dropIfExists('tbl_feed_category');
    }
}
