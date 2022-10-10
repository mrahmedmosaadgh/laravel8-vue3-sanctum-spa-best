<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolclassesTable extends Migration
{
    /**
     * Run the migrations.
     *SELECT `id`, `schoolgroup_id`, `school_id`, `stage`, `className`, `nameLong`, `notes1`,
    *   `notes2`, `notes3`, `created_at`, `
    *   updated_at` FROM `scschoolclasses` WHERE 1
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolclasses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 
            $table->unsignedBigInteger('school_id'); 
            $table->unsignedBigInteger('grade_id'); 
            $table->string('stage',20)->nullable(); //ex. primary
            
            $table->string('grade',20)->nullable(); // Ex. 1
            $table->string('name',50)->nullable(); // ex. 1A or A
            $table->string('namecut',50)->nullable(); 
            $table->string('subjects',50)->nullable(); 
            $table->integer('periodscount')->nullable(); 

            $table->integer('createdby')->nullable(); 
            $table->string('notes')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            // $table->foreign('school_id')->references('id')->on('users');
            $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('scschoolclasses');
    }
}
