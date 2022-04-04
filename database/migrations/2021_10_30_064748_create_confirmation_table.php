<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->date('baptism_date');
            $table->string('baptism_place');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('address');
            $table->date('confirmation_date');
            $table->time('time');
            $table->string('minister');
            $table->string('sponsors');
            $table->string('status')->default('done');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmation');
    }
}
