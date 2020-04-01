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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->String('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->String('gender')->default('');
            $table->integer('age')->default(18);
            $table->text('address')->default('Earth (At least we hope so!)');
            $table->integer('score')->default(0);
            $table->integer('task')->default(0);
            $table->boolean('obj1')->default(0);
            $table->boolean('obj2')->default(0);
            $table->boolean('obj3')->default(0);
            $table->boolean('obj4')->default(0);
            $table->boolean('obj5')->default(0);
            $table->boolean('obj6')->default(0);
            $table->boolean('obj7')->default(0);
            $table->boolean('obj8')->default(0);
            $table->boolean('obj9')->default(0);
            $table->boolean('obj10')->default(0);
            $table->boolean('obj11')->default(0);
            $table->boolean('obj12')->default(0);
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
