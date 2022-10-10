<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolWeeklyMainsTable extends Migration
{
    /**
     * Run the migrations.scschoolcalenders
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschool_weekly_mains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('calender_id');
            $table->unsignedBigInteger('grade_id'); 
            $table->unsignedBigInteger('subject_id');
            // $table->string('sharegrade_ids');//students_ids or class_ids
            // $table->string('shareclass_ids');//students_ids or class_ids
            $table->dateTime('publish');
            $table->dateTime('publishoff');
            $table->string('name',50);
            // $table->string('grade',50);

            // $table->unsignedBigInteger('grade_id');


            $table->string('notes')->nullable();
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('calender_id')->references('id')->on('scschoolcalenders')->onDelete('cascade');
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
        Schema::dropIfExists('scschool_weekly_mains');
    }
}
