<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('instructor_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('view_count')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->timestamps();

            // $table->foreign('category_id')
            // ->references('id')
            // ->on('categories')
            // ->onDelete('set null');

            // $table->foreign('instructor_id')
            // ->references('id')
            // ->on('users')
            // ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
