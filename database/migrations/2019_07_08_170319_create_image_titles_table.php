<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImageTitlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('title_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->integer('row_num')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('title_id')->references('id')->on('titles')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
            $table->foreign('image_id')->references('id')->on('images')
                ->onDelete('cascade')
                ->onUpdate('cascade');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image_titles');
    }
}
