<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlmarksSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forqan_controlmarks_setups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id' );
            $table->unsignedBigInteger('calender_id');
            $table->string('name' ,150)->nullable();//semester 1
            $table->string('year' ,150)->nullable();//semester 1
            $table->date('date' )->nullable();//semester 1$table->date('birth_date');
            $table->date('input_start')->nullable();//start input marks for teachers
            $table->date('input_end')->nullable();//start input marks for teachers
            $table->date('display_start')->nullable();//start input marks for teachers
            $table->date('display_end')->nullable();//start input marks for teachers
            $table->string('sub_names' ,150)->default('[sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub10]');
            $table->string('sub_max' ,150)->default('[20,20,20,20,20,20,20,20,20,20]');
            $table->string('sub_min' ,150)->default('[10,10,10,10,10,10,10,10,10,10]');
            $table->foreign('school_id' )->references('id')->on('users');
            $table->foreign('calender_id')->references('id')->on('scschoolcalenders');
            $table->timestamps();
        });
    }

    /**id

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controlmarks_setups');
    }
}
