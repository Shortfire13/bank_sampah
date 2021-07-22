<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_juals', function (Blueprint $table) {
            $table->id('id_detail')->unique();
            $table->biginteger('id_jual')->unsigned();
            $table->integer('jumlak_kg');
            $table->integer('subtotal');
        });
        Schema::table('detail_juals', function (Blueprint $table) {
        
            $table->foreign('id_jual')->references('id_jual')->on('jual_sampahs');
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_juals');
    }
}
