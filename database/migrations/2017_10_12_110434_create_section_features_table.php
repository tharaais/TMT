<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section_features_title', 500);
            $table->string('section_features_value', 500);
            $table->string('section_features_ro_value', 500);
            $table->string('section_features_ru_value', 500);
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
        Schema::dropIfExists('section_features');
    }
}
