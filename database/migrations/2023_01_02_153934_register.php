<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Register extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Register',function(Blueprint $table){
        $table->increments('Id');
        $table->string('Enrollment');
        $table->string('Name');
        $table->string('Fname');
        $table->string('Email');
        $table->string('Mobile');
        $table->string('Branch');
        $table->string('Cource');
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
       schema::drop('Register');
    }
}
