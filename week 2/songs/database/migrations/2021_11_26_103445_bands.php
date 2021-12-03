<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable(false);
        $table->integer('founded')->lenght(4)->nullable(false);
        $table->string('active_till')->default("Heden")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
