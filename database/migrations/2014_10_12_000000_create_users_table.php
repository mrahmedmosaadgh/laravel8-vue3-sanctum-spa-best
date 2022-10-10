<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('usertype')->default('user');
            $table->string('schoolgroup_id')->nullable();
            $table->string('school_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('nameen')->nullable();
            $table->string('namear')->nullable();
            $table->string('classname')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('subjects')->nullable();
            $table->integer('active')->default(1);
            $table->timestamp('lastlogin')->nullable();
            $table->timestamp('lastonline')->nullable();
            $table->timestamp('lastactive')->nullable();
            $table->string('createdby')->nullable();
            $table->string('notes1')->nullable();
            $table->string('notes2')->nullable();
            $table->string('notes3')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}



// // --------------------------------------
// php artisan make:migration add_paid_to_users_table --table=users
// php artisan make:migration add_lastlogin_to_users_table --table=users


// public function up()
// {
//     Schema::table('users', function($table) {
//         $table->integer('paid');
//     });
// }

// public function down()
// {
//     Schema::table('users', function($table) {
//         $table->dropColumn('paid');
//     });
// }

// php artisan migrate

