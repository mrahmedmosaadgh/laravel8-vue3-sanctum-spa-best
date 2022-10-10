<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScsschoolschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolschedules', function (Blueprint $table) {
            // $table->id();scschoolclassteachersubjects
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('scschoolclassteachersubject_id'); 
            $table->unsignedBigInteger('class_id'); 
            $table->unsignedBigInteger('teacher_id'); 
            $table->unsignedBigInteger('subject_id'); 
            $table->string('period')->nullable();
            $table->string('day')->nullable();
            $table->Integer('periodcode')->nullable();
            $table->string('notes')->nullable();

            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('scschoolclassteachersubject_id')->references('id')->on('scschoolclassteachersubjects')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('scschoolclasses')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('scschoolschedules');
    }
}
