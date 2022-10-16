<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks_marks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('marks_setup_id');
            $table->unsignedBigInteger('student_id');

            $table->string('student_name' ,150)->nullable();
            $table->string('classroom' ,50)->nullable();
            $table->string('type' ,50)->nullable();
            $table->string('notes' )->nullable();
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
            $table->string('sub11',50)->nullable();
            $table->string('sub12',50)->nullable();
            $table->string('sub13',50)->nullable();
            $table->string('sub14',50)->nullable();
            $table->string('sub15',50)->nullable();
            $table->string('sub16',50)->nullable();
            $table->string('sub17',50)->nullable();
            $table->string('sub18',50)->nullable();
            $table->string('sub19',50)->nullable();
            $table->string('sub20',50)->nullable();
            $table->string('total',50)->nullable();
            $table->string('total2',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('password',50)->nullable();


            $table->integer('seencounter')->nullable();
            $table->foreign('school_id')->references('id')->on('marks_users')->onDelete('cascade');
            $table->foreign('marks_setup_id')->references('id')->on('marks_setups')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('marks_marks');
    }
}
