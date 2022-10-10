<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatescschooltermmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschooltermmarks', function (Blueprint $table) {
            // $table->id();scschoolclassteachersubjects
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('scschooltermmarkmain_id');
            $table->unsignedBigInteger('scschoolclassteachersubject_id')->nullable(); 
            $table->unsignedBigInteger('teacher_id')->nullable(); 
            $table->unsignedBigInteger('class_id')->nullable(); 
            $table->unsignedBigInteger('subject_id')->nullable(); 
            $table->unsignedBigInteger('student_id')->nullable(); 
            $table->string('term')->nullable();
            $table->string('stage')->nullable();
            $table->string('mark1')->nullable();
            $table->string('mark2')->nullable();
            $table->string('mark3')->nullable();
            $table->string('mark4')->nullable();
            $table->string('mark5')->nullable();
            $table->string('mark6')->nullable();
            $table->string('mark7')->nullable();
            $table->string('mark8')->nullable();
            $table->string('mark9')->nullable();
            $table->string('mark10')->nullable();
            $table->dateTime('mark1date')->nullable();
            $table->dateTime('mark2date')->nullable();
            $table->dateTime('mark3date')->nullable();
            $table->dateTime('mark4date')->nullable();
            $table->dateTime('mark5date')->nullable();
            $table->dateTime('mark6date')->nullable();
            $table->dateTime('mark7date')->nullable();
            $table->dateTime('mark8date')->nullable();
            $table->dateTime('mark9date')->nullable();
            $table->dateTime('mark10date')->nullable();


            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scschoolclassteachersubject_id')->references('id')->on('scschoolclassteachersubjects')->onDelete('cascade');
            $table->foreign('scschooltermmarkmain_id')->references('id')->on('scschooltermmarkmains')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschooltermmarks');
    }
}
