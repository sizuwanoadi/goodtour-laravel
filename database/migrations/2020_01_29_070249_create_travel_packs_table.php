<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packs', function (Blueprint $table) {
            $table->bigIncrements('travel_packs_id');
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->longtext('about');
            $table->string('featured_event');
            $table->string('language');
            $table->string('foods');
            $table->date('departure_date');
            $table->string('duration');
            $table->string('type');
            $table->integer('price'); 
            $table->softDeletes();
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
        Schema::dropIfExists('travel_packs');
    }
}
