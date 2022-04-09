<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //  Schema::create('contact', function (Blueprint $table) {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->char('email');
            $table->text('message');
           // $table->date('datetime');
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
        Schema::dropIfExists('contacts');
            
}

}
