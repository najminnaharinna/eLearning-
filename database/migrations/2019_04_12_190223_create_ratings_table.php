<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('course_id');
            $table->integer('rate');
            $table->string('message')->nullable();
            $table->timestamps();

        //     $table->foreign('user_id')
        //    ->references('id')
        //    ->on('users')
        //    ->onDelete('set null');

           
        //    $table->foreign('course_id')
        //    ->references('id')
        //    ->on('courses')
        //    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
