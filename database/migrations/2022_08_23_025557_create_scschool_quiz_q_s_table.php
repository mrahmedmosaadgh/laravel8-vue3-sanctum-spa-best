<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolQuizQSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_quiz_q_s', function (Blueprint $table) {

                        $table->bigIncrements('id');
                        $table->unsignedBigInteger('school_id');
                        $table->unsignedBigInteger('scschool_quiz_main_id');
                        $table->string('name');
                        $table->string('type')->comment('type of the question [choose, complete, match, multi choises]');
                        $table->string('head');
                        $table->text('main');
                        $table->integer('choices_count')->default(1);
                        $table->text('choice1');
                        $table->text('choice2');
                        $table->text('choice3');
                        $table->text('choice4');
                        $table->text('choice5');
                        $table->text('choice6');
                        $table->string('correct');//correct answer or choice array
                        $table->boolean('active')->default(1);
                        $table->boolean('qBank')->default(1);
                        $table->boolean('hardness')->default(1)->comment(' 1 easy but 5 hard [1, 2, 3,4,5]');
                        $table->unsignedBigInteger('subject_id');
                        $table->unsignedBigInteger('lesson_id')->nullable();
                        $table->string('chapter',50);
                        $table->string('lesson',50);
                        $table->string('notes')->nullable();
                        $table->timestamps();
            
                        $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
                        $table->foreign('scschool_quiz_main_id')->references('id')->on('scschool_quiz_mains')->onDelete('cascade');
                        $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');
                        $table->foreign('lesson_id')->references('id')->on('scschool_lesson_mains')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschool_quiz_q_s');
    }
}
