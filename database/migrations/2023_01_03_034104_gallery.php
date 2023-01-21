<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gallery extends Migration
{
    public function up()
    {
        schema::create('Gallery', function(Blueprint $table){
            $table->increments('Id');
            $table->string('Image');
            $table->timestamps();
        });
    }
    public function down()
    {
        schema::drop('Gallery');
    }
}
