<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name', 250);
            $table->string('item_ro_name', 250);
            $table->string('item_sub_description', 500);
            $table->string('item_ro_sub_description', 500);
            $table->text('item_description');
            $table->text('item_ro_description');
            $table->string('item_main_image', 250);
            $table->unsignedTinyInteger('item_featured');
            $table->date('item_created_date');
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
        Schema::dropIfExists('items');
    }
}
