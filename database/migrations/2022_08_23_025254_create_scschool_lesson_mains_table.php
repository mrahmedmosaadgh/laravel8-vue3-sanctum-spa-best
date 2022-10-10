<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolLessonMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_lesson_mains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('weekly_id')->nullable();
            $table->unsignedBigInteger('grade_id'); 
            $table->dateTime('publish');
            $table->dateTime('publishoff');
            $table->string('name',50);
            $table->string('stage',50);
            $table->text('sharestudent_ids');//->comment('students_ids or class_ids');students_ids or class_ids
            $table->string('shareclass_ids');//students_ids or class_ids
            $table->boolean('public')->default(1);
            $table->boolean('active')->default(1);


            $table->unsignedBigInteger('subject_id');
            $table->string('chapter',50);
            $table->string('lesson',50);



            $table->integer('createdby')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('weekly_id')->references('id')->on('scschool_weekly_mains')->onDelete('cascade');

            $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');
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
        Schema::dropIfExists('scschool_lesson_mains');
    }
}
