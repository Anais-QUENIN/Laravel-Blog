<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('series', function (Blueprint $table) {

            Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('author_id') -> default(0);
            $table->mediumText('title');
            $table->longText('content');
            $table->longText('acteurs');
            $table->longText('auteur');
            $table->string('url',200)->unique('url_UNIQUE');
            $table->text('tags')->nullable();
            $table->longText('fichier');
            $table->longText('fichier2'); 
            $table->string('status',45)->default('draft');
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
        Schema::dropIfExists('series');
            
        
    }

}