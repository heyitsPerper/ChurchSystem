<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage', function (Blueprint $table) {
            $table->id();
            $table->string('hhusbandname');
            $table->date('hbirthdate');
            $table->integer('hage');
            $table->string('hbirthplace');
            $table->string('hcitizenship');
            $table->string('hhusbandresidence');
            $table->string('hreligion');
            $table->string('hcivilstatus');
            $table->string('hfathername');
            $table->string('hfathercitizenship');
            $table->string('hmothername');
            $table->string('hmothercitizenship');
            $table->string('hwitness');
            $table->string('hwitnessrelationship');
            $table->string('hwitnessresidence');
            $table->string('wwifename');
            $table->date('wbirthdate');
            $table->integer('wage');
            $table->string('wbirthplace');
            $table->string('wcitizenship');
            $table->string('wwiferesidence');
            $table->string('wreligion');
            $table->string('wcivilstatus');
            $table->string('wfathername');
            $table->string('wfathercitizenship');
            $table->string('wmothername');
            $table->string('wmothercitizenship');
            $table->string('wwitness');
            $table->string('wwitnessrelationship');
            $table->string('wwitnessresidence');
            $table->date('marriagecontractdate');
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
        Schema::dropIfExists('marriage');
    }
}
