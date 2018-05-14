<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('campuses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('info');
          $table->string('image');
          $table->integer('cities_id')->unsigned()->index();
          $table->foreign('cities_id')->references('id')->on('cities')->onDelete('cascade');
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
      Schema::table('campuses', function (Blueprint $table) {
            $table->dropForeign('campuses_cities_id_foreign');
        });
        Schema::dropIfExists('campuses');
    }
}
