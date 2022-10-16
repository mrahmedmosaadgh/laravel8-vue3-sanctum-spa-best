<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavecodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savecodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lang' ,150);
            $table->string('b1n' ,150);
            $table->longText('b1')->nullable();
            $table->string('b2n' ,150);
            $table->longText('b2')->nullable();
            $table->string('b3n' ,150);
            $table->longText('b3')->nullable();
            $table->string('b4n' ,150);
            $table->longText('b4')->nullable();
            $table->string('b5n' ,150);
            $table->longText('b5')->nullable();

            $table->longText('notes')->nullable();

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
        Schema::dropIfExists('savecodes');
    }
}
