<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_answers', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('question');
            $table->string('answers');
            $table->string('type');
            $table->unsignedBigInteger('report_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports_answers');
    }
}
