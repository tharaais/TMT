<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_sections', function (Blueprint $table) {
            $table->increments('section_id');
            $table->string('section_title', 500);
            $table->string('section_ro_title', 500);
            $table->text('section_content');
            $table->text('section_ro_content');
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
        Schema::dropIfExists('website_sections');
    }
}
