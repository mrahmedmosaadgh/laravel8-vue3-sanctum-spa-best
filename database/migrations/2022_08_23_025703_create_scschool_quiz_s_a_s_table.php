<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolQuizSASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_quiz_s_a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('scschoolclassteachersubject_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('scschool_quiz_main_id');
            $table->unsignedBigInteger('scschool_quiz_q_id');

            $table->text('answer');
            $table->string('choice')->nullable();
            $table->boolean('correct')->default(1);

            $table->string('notes')->nullable();


            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scschoolclassteachersubject_id')->references('id')->on('scschoolclassteachersubjects')->onDelete('cascade');
            $table->foreign('scschool_quiz_main_id')->references('id')->on('scschool_quiz_mains')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');
            $table->foreign('lesson_id')->references('id')->on('scschool_lesson_mains')->onDelete('cascade');
            $table->foreign('scschool_quiz_q_id')->references('id')->on('scschool_quiz_q_s')->onDelete('cascade');
            
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
        Schema::dropIfExists('scschool_quiz_s_a_s');
    }
}
