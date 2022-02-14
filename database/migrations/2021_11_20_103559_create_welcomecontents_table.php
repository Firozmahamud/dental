<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomecontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcomecontents', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('header', 100);
            $table->string('details')->nullable();            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('welcomecontents');
    }
}
