<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsSuperUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_superusers', function (Blueprint $table) {
            $table->bigInteger('news_id')->unsigned();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');

            $table->bigInteger('superuser_id')->unsigned();
            $table->foreign('superuser_id')->references('id')->on('superusers')->onDelete('cascade');
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
        Schema::dropIfExists('news_superusers');
    }
}
