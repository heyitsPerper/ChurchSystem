<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('death', function (Blueprint $table) {
            $table->id();
            $table->string('deceased_name');
            $table->date('death_date');
            $table->date('burial_date');
            $table->string('status');
            $table->string('residence');
            $table->string('sacraments');
            $table->string('death_cause');
            $table->string('death_place');
            $table->string('minister');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('death');
    }
}
