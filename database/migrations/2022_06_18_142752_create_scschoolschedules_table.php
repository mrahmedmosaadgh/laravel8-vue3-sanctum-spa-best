<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolschedulesTable extends Migration
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
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id')->nullable(); 
            $table->unsignedBigInteger('scschoolclassteachersubject_id')->nullable(); 
            // $table->unsignedBigInteger('teacher_id')->nullable(); 
            $table->unsignedBigInteger('class_id')->nullable(); 
            // $table->unsignedBigInteger('subject_id')->nullable(); 
            $table->string('period')->nullable();
            $table->string('day')->nullable();

            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
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
        Schema::dropIfExists('scschoolschedules');
    }
}
