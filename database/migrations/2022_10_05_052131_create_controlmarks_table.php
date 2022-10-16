<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forqan_controlmarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('controlmarkssetup_id');
            $table->unsignedBigInteger('school_id' );
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('class_id'  );
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('grade')->nullable();
            $table->string('stage' ,50)->nullable();
            $table->string('sub1' ,50)->nullable();
            $table->string('sub2' ,50)->nullable();
            $table->string('sub3' ,50)->nullable();
            $table->string('sub4' ,50)->nullable();
            $table->string('sub5' ,50)->nullable();
            $table->string('sub6' ,50)->nullable();
            $table->string('sub7' ,50)->nullable();
            $table->string('sub8' ,50)->nullable();
            $table->string('sub9' ,50)->nullable();
            $table->string('sub10',50)->nullable();
            $table->integer('sub_count')->nullable();
            $table->string('notes' )->nullable();

            $table->foreign('school_id' )->references('id')->on('users');
            $table->foreign('controlmarkssetup_id' )->references('id')->on('forqan_controlmarks_setups');
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('class_id'  )->references('id')->on('scschoolclasses');
            $table->foreign('subject_id')->references('id')->on('scschoolsubjects');
            $table->foreign('student_id')->references('id')->on('users');


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
        Schema::dropIfExists('controlmarks');
    }
}
