<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChurchCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churchcollections', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('celebration_type');
            $table->time('time');
            $table->bigInteger('first_collection');
            $table->bigInteger('second_collection');
            $table->bigInteger('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('churchcollections');
    }
}


  
