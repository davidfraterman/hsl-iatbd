<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('lender_id');
            $table->integer('rating');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lender_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_user_id_foreign');
            $table->dropForeign('reviews_lender_id_foreign');
        });

        Schema::dropIfExists('reviews');
    }
}
