<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePobedniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pobedniks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('takmicenje_id')->constrained('takmicenjes');
            $table->foreignId('ucesnik_id')->constrained('ucesniks');
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
        Schema::dropIfExists('pobedniks');
    }
}
