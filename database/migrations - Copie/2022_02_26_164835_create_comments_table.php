<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //  Schema::create('comments', function (Blueprint $table) {
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->text('author_id');
        $table->unsignedBigInteger('serie_id');
        $table->longText('content');
        //$table->date('datetime');
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
        Schema::dropIfExists('comments');
     
    }
}
