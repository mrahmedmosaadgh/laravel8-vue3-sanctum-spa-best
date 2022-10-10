<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolstudents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('student_id'); 
            $table->string('stage')->nullable(); 
            $table->string('classname')->nullable(); 
            $table->string('parent_id')->nullable();
            $table->string('notes1')->nullable();
            
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            // $table->foreign('school_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschoolstudents');
    }
}
