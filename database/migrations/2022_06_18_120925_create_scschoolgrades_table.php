<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolgradesTable extends Migration
{
    /**
     * Run the migrations.
     *SELECT `id`, `schoolgroup_id`, `school_id`, `stage`, `className`, `nameLong`, `notes1`,
    *   `notes2`, `notes3`, `created_at`, `
    *   updated_at` FROM `scschoolgrades` WHERE 1
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolgrades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id'); 
            $table->string('name',50)->nullable(); //ex. primary

            $table->string('namecut',50)->nullable(); 
            $table->string('subjects')->nullable(); 
            $table->integer('periodscount')->nullable(); 

            $table->integer('createdby')->nullable(); 
            $table->string('notes')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->timestamps();
            // $table->foreign('school_id')->references('id')->on('users');
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
        Schema::dropIfExists('scschoolgrades');
    }
}
