<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UmetnickoImeKolona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ucesniks', function (Blueprint $table) {
            $table->after('ime_prezime', function ($table) {
                $table->string('umetnicko_ime');
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
        Schema::table('ucesniks', function (Blueprint $table) {
            $table->dropColumn('umetnicko_ime');
        });
    }
}
