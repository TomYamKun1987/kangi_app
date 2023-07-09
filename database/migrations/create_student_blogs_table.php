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
        Schema::create('student_blogs', function (Blueprint $table) {
            $$table->increments('id');
            $table->integer('staff_id');
            $table->integer('student_id');
            $table->dateTime('post_datetime');
            $table->text('comments');
            $table->integer('edit_flg');
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_blogs');
    }
};
