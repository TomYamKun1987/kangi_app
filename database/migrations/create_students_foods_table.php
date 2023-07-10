<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('year');
            $table->string('month');
            $table->string('day');
            $table->integer('status');
            $table->integer('double_flg');
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
        Schema::dropIfExists('student_foods');
    }
};
