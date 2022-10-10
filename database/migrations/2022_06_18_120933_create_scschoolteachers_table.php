<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolteachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('teacher_id');
            $table->string('subjects')->nullable(); 
            $table->string('classes')->nullable(); 
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            // $table->foreign('school_id')->references('id')->on('users');
            $table->timestamps();


            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**`id`, `schoolgroup_id`, `school_id`, `teacher_id`, `namear`, `nameen`, `subjects`,
     *  `classes`, `stage`, `notes1`, `notes2`, `notes3`, `createdby`, `created_at`, `updated_at`
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschoolteachers');
    }
}
