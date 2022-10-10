<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolQuizMainsTable extends Migration
{
    /**
     *             $table->date('date');
     *      // $table->dateTime('datetime')->nullable();
     *      // $table->boolean('attendence_status')->default(0);
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_quiz_mains', function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->unsignedBigInteger('school_id');
                        $table->dateTime('publish');
                        $table->dateTime('publishoff');
                        $table->string('name');
                        $table->string('stage');
                        $table->string('sharestudent_ids');//->comment('students_ids or class_ids');students_ids or class_ids
                        // $table->string('shareclass_ids');//students_ids or class_ids
                        $table->unsignedBigInteger('weekly_id')->nullable();
                        $table->unsignedBigInteger('grade_id'); 
                        $table->unsignedBigInteger('subject_id');
                        $table->unsignedBigInteger('lesson_id')->nullable();
                        $table->string('chapter',50);
                        $table->string('lesson',50);




                        $table->boolean('public')->default(1);
                        $table->boolean('active')->default(1);
                        $table->integer('createdby')->nullable();
                        $table->string('notes')->nullable();
                        $table->timestamps();

                        $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
                        $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');
                        $table->foreign('lesson_id')->references('id')->on('scschool_lesson_mains')->onDelete('cascade');
                        $table->foreign('weekly_id')->references('id')->on('scschool_weekly_mains')->onDelete('cascade');
                        $table->foreign('grade_id')->references('id')->on('scschoolgrades')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschool_quiz_mains');
    }
}
