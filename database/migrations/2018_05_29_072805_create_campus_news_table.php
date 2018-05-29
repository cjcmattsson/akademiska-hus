<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('header');
            $table->string('body');
            $table->string('image');
            $table->string('author');
            $table->integer('campus_id')->unsigned()->index();
            $table->foreign('campus_id')->references('id')->on('campuses')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('campus_news');
    }
}
