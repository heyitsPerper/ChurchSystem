<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptismalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptismal', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('legitimate_ill');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('address');
            $table->date('baptism_date');
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
        Schema::dropIfExists('baptismal');
    }
}
