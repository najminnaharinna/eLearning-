<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('instructor_id');
            $table->unsignedInteger('section_id');
            $table->string('title');
            $table->text('discription');
            $table->string('video_url')->nullable();
            $table->string('source_code_url')->nullable();
            $table->integer('view_count')->nullable();
            $table->integer('like_count')->nullable();
            $table->timestamps();

            // $table->foreign('course_id')
            //     ->references('id')
            //     ->on('courses')
            //     ->onDelete('set null');

            // $table->foreign('instructor_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('set null');

            // $table->foreign('section_id')
            //     ->references('id')
            //     ->on('sections')
            //     ->onDelete('set null');
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
