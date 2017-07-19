<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->integer('genre_id');
            $table->string('title');
            $table->text('title_analysis');
            $table->text('topic');
            $table->text('composition');
            $table->text('motives');
            $table->text('message');

            $table->text('content')->nullable();
            $table->text('tropes')->nullable();
            $table->text('plot')->nullable();
            $table->text('lyrical_speaker')->nullable();
            $table->text('conflicts')->nullable();
            $table->text('narrator')->nullable();
            $table->text('artistic_chronotope')->nullable();
            $table->text('dominant_feelings')->nullable();
            $table->text('artistic_techniques')->nullable();
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
        Schema::dropIfExists('books');
    }
}
