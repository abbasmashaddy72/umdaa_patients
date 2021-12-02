<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemoveColoumInDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('popup_image')->nullable()->after('extra_services');
            $table->bigInteger('clinic_number')->nullable()->after('popup_image');
            $table->dropColumn('t_link');
            $table->dropColumn('f_link');
            $table->dropColumn('i_link');
            $table->dropColumn('l_link');
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
            $table->dropColumn('popup_image');
            $table->dropColumn('clinic_number');
        });
    }
}
