<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatescschooltermmarkmainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschooltermmarkmains', function (Blueprint $table) {
            // $table->id();scschoolclassteachersubjects
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('scschoolclassteachersubject_id')->nullable(); 
            $table->unsignedBigInteger('teacher_id')->nullable(); 
            $table->unsignedBigInteger('class_id')->nullable(); 
            $table->unsignedBigInteger('subject_id')->nullable(); 
            // $table->unsignedBigInteger('student_id')->nullable(); 
            $table->string('term')->nullable();
            $table->string('stage')->nullable();
            $table->string('markname')->nullable();
            $table->string('markfull')->nullable();
            $table->string('markmin')->nullable();
            $table->dateTime('publishdate')->nullable();
            $table->dateTime('cutoffdate')->nullable();




            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scschoolclassteachersubject_id')->references('id')->on('scschoolclassteachersubjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschooltermmarkmains');
    }
}
