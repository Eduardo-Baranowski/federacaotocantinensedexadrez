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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nickchess');
            $table->string('nicklichess');
            $table->integer('ratting')->default(1800);
            $table->integer('rattingchess')->nullable();
            $table->integer('rattingchessbullet')->nullable();
            $table->integer('rattingchessrapido')->nullable();
            $table->integer('rattingchesspensado')->nullable();
            $table->integer('rattinglichess')->nullable();
            $table->integer('rattinglichessbullet')->nullable();
            $table->integer('rattinglichessrapido')->nullable();
            $table->integer('rattinglichesspensado')->nullable();
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
