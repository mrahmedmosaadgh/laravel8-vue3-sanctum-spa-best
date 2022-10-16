<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksSetupsTable extends Migration
{

    public function up()
    {
        Schema::create('marks_setups',
 function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('school_id' );
            $table->string('name',150)->nullable();
            $table->string('term',20)->nullable();
            $table->string('year',20)->nullable();

            $table->string('names_array')->nullable();
            $table->string('max_array'  )->nullable();
            $table->string('min_array'  )->nullable();
            $table->string('keys_array' )->nullable();
            $table->string('grade'      )->nullable();
            $table->string('lang'       )->nullable();

            $table->integer('subcount')->nullable(); 
            $table->string('notes')->nullable();
            $table->integer('seencounter')->nullable();
            // $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');

        //     $table->bigInteger('user_id')->unsigned()->index(); // this is working
        // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        $table->bigInteger('school_id')->unsigned()->index(); // this is working
        // $table->foreign('school_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('marks_setups');
    }
}
