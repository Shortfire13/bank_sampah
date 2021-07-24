<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualSampahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual_sampahs', function (Blueprint $table) {
            $table->id('id_jual')->unique();
            $table->bigInteger('id_user')->unsigned();
            $table->timestamp('tgl_jual');
            $table->integer('total');
            $table->string('status', 10);
        });
        Schema::table('jual_sampahs', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade')->onUpdate('cascade');
           
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jual_sampahs');
    }
}
