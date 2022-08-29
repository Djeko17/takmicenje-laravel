<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstagramKolona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('takmicenjes', function (Blueprint $table) {
            $table->after('godina', function ($table) {
                $table->string('instagram')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('takmicenjes', function (Blueprint $table) {
            $table->dropColumn('instagram');
        });
    }
}
