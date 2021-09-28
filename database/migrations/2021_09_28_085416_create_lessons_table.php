<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class');
            $table->integer('objcommnclearly');
            $table->integer('inclusion');
            $table->integer('reviewed');
            $table->integer('thrknow');
            $table->integer('subjmat');
            $table->integer('knowrel');
            $table->integer('ideaexp');
            $table->integer('actandqn');
            $table->integer('praise');
            $table->integer('poorbehave');
            $table->integer('fairness');
            $table->integer('recmiscon');
            $table->integer('studengaged');
            $table->integer('timeutil');
            $table->integer('goodprac');
            $table->integer('descriptor');
            $table->text('comment');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('lessons');
    }
}
