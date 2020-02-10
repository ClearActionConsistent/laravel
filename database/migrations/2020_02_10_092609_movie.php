<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function(Blueprint $table){
			$table->bigIncrements('id');
			$table->unsignedBigInteger('price_id');
			$table->string('name');
			$table->text('description')->nullable();
			$table->timestamps();
			
			$table->index('price_id');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('movies');
    }
}
