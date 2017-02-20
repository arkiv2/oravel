<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('student_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->integer('year')->default(4);
            $table->string('course')->default('BSBE');
            $table->string('shop_id')->unsigned();
            $table->string('password')->nullable();
            $table->string('provider');
            $table->string('provider_id')->unique();
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
