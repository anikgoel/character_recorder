<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('values', function (Blueprint $table) {
            $table->foreign(['character_id'], 'values_ibfk_1')->references(['id'])->on('characters')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['header_id'], 'values_ibfk_2')->references(['id'])->on('headers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('values', function (Blueprint $table) {
            $table->dropForeign('values_ibfk_1');
            $table->dropForeign('values_ibfk_2');
        });
    }
}
