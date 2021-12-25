<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinshedSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finshed_surveys', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->timestamps();
            $table->foreignId("survey_id")->constrained("surveys")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finshed_surveys');
    }
}
