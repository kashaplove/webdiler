<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estimate_good', function (Blueprint $table) {
            $table->unsignedMediumInteger('number_of_goods')->nullable()->after('good_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estimate_good', function (Blueprint $table) {
            $table->dropColumn('number_of_goods');
        });
    }
};
