<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentLendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_lends', function (Blueprint $table) {
            $table->id();
            $table->integer('borrower_id');
            $table->integer('product_id');
            $table->integer('product_owner_id');

            $table->foreign('borrower_id')->references('id')->on('users');
            $table->foreign('product_owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_lends');
    }
}
