<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolclassteachersubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolclassteachersubjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('class_id')->nullable(); 
            $table->unsignedBigInteger('teacher_id')->nullable(); 
            $table->unsignedBigInteger('subject_id')->nullable(); 
            $table->unsignedBigInteger('periodcount')->nullable(); 
            $table->unsignedBigInteger('color')->nullable(); 
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschoolclassteachersubjects');
    }
}
