<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuestsUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('guests', function (Blueprint $table) {
        $table->string('zip')->change();
        $table->boolean('need_guest')->default(false)->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('guests', function (Blueprint $table) {
            $table->integer('zip')->change();
            $table->boolean('need_guest')->change();
        });
    }
}
