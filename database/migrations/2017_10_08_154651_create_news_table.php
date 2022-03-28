<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_title', 500);
            $table->string('news_ro_title', 500);
            $table->text('news_content');
            $table->text('news_ro_content');
            $table->text('news_subtitle');
            $table->text('news_ro_subtitle');
            $table->date('news_created_date');
            $table->date('news_published_date');
            $table->string('news_image', 250);
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
        Schema::dropIfExists('news');
    }
}
