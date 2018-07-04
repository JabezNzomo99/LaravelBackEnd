<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('UserName');
            $table->string('email')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->integer('Age')->nullable();
            $table->string('Gender')->nullable();
            $table->integer('Weight')->nullable();
            $table->integer('TargetWeight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('User', function (Blueprint $table) {
            //
        });
    }
}
