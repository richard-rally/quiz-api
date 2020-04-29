<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizRoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_round', function (Blueprint $table) {
            $table->unsignedBigInteger('quiz_id');
            $table->unsignedBigInteger('round_id');

            $table->foreign('quiz_id')->references('id')->on('quizzes');
            $table->foreign('round_id')->references('id')->on('rounds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_round');
    }
}
