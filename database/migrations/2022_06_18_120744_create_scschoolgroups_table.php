<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScschoolgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scschoolgroups', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schoolgroup_id')->nullable(); 

            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->string('notes4')->nullable();
            $table->string('notes5')->nullable();
            
            // $table->string('queue')->index();
            // $table->string('token', 64)->unique();
            // $table->text('abilities')->nullable();
            // $table->timestamp('last_used_at')->nullable();
            
            $table->timestamps();
            $table->foreign('schoolgroup_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scschoolgroups');
    }
}
