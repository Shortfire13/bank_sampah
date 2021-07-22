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
            $table->id('id_user')->unique();
            $table->string('nama_user', 50);
            $table->string('username', 15)->unique();
            $table->string('email', 50)->unique();
            $table->string('no_hp', 13)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 15);
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
