<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_participations', function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->unsignedBigInteger('school_id');
                        $table->unsignedBigInteger('student_id');
                        $table->unsignedBigInteger('class_id');
                        $table->unsignedBigInteger('grade_id');
                        $table->unsignedBigInteger('teacher_id');
                        $table->unsignedBigInteger('subject_id');
                        $table->unsignedBigInteger('scschoolschedule_id');
                        $table->date('date');
                        // $table->publish('date');
                        // $table->timestamp()('week')->nullable();
                        $table->integer('round')->default(1);
                        $table->integer('mark');
                        // $table->boolean('mark')->default(1);
                        $table->string('type',20)->default('+');
                        $table->string('notes')->nullable();
                        $table->timestamps();
            
                        $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
                        $table->foreign('class_id')->references('id')->on('scschoolclasses')->onDelete('cascade');
                        $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
                        $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
                        $table->foreign('subject_id')->references('id')->on('scschoolsubjects')->onDelete('cascade');
                        $table->foreign('scschoolschedule_id')->references('id')->on('scschoolschedules')->onDelete('cascade');
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
        Schema::dropIfExists('scschool_participations');
    }
}
