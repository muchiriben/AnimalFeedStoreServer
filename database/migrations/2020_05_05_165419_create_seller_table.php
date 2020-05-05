<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_seller', function (Blueprint $table) {
            $table->bigIncrements('seller_id');
	    $table->string('seller_title');
	    $table->text('seller_description');
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
        Schema::dropIfExists('tbl_seller');
    }
}
