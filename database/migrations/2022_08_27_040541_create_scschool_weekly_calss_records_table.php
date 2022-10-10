<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolWeeklyCalssRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_weekly_calss_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('calender_id');
            $table->unsignedBigInteger('weekly_id')->nullable();
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();

            $table->integer('term');
            $table->integer('week')->nullable();
            $table->integer('day')->nullable();
            $table->date('date');//boolean
            $table->integer('period')->nullable();
            // A = attendance	                          
            // B = behavior		                              
            // P = participation	                                    
            // W = work (class work / homework)
            // $table->boolean('attendance')->default(1);
            // $table->integer('behavior')->default(10);
            // $table->integer('participation')->default(10);
            // $table->integer('classwork')->default(10);
            // $table->integer('homework')->default(10);

            $table->boolean('attendance')->default(0);
            $table->integer('behavior')->default(0);
            $table->integer('participation')->default(0);
            $table->integer('classwork')->default(0);
            $table->integer('homework')->default(0);

            $table->string('quiz',10)->nullable();
            $table->string('project',10)->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('school_id')  ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('teacher_id') ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('student_id') ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('scschoolclasses')->onDelete('cascade');

            $table->foreign('grade_id')->references('id')->on('scschoolgrades')->onDelete('cascade');
            $table->foreign('calender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('weekly_id')->references('id')->on('scschool_weekly_mains')->onDelete('cascade');
            $table->foreign('lesson_id')->references('id')->on('scschool_lesson_mains')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschool_weekly_calss_records');
    }
}
