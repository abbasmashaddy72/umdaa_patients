<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumsToDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->longText('about')->after('qualification')->nullable();
            $table->string('t_link')->after('about')->nullable();
            $table->string('f_link')->after('t_link')->nullable();
            $table->string('i_link')->after('f_link')->nullable();
            $table->string('l_link')->after('i_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('about');
            $table->dropColumn('t_link');
            $table->dropColumn('f_link');
            $table->dropColumn('i_link');
            $table->dropColumn('l_link');
        });
    }
}
