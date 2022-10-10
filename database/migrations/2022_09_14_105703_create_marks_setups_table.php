<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksSetupsTable extends Migration
{

    
//     SELECT `id`,
//  `school_id`,
//  `name`,
//  `term`,
//  `year`,
//  `search_field`,

//  `names_array`,
//  `max_array`  ,
//  `min_array`  ,
//  `keys_array` ,
//  `grade`      ,
//  `lang`       ,

//  `notes`,
//  `seencounter`,
//  `created_at`,
//  `updated_at` FROM `marks_setups` WHERE 1;
    public function up()
    {
        Schema::create('marks_setups',
 function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('school_id'); 
            $table->string('name',150)->nullable();
            $table->string('term',20)->nullable();
            $table->string('year',20)->nullable();

            $table->string(`names_array`)->nullable();
            $table->string(`max_array`  )->nullable();
            $table->string(`min_array`  )->nullable();
            $table->string(`keys_array` )->nullable();
            $table->string(`grade`      )->nullable();
            $table->string(`lang`       )->nullable();

            $table->integer('subcount')->nullable(); 
            $table->string('notes')->nullable();
            $table->integer('seencounter')->nullable();
            $table->foreign('school_id')->references('id')->on('marks_users')->onDelete('cascade');
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
