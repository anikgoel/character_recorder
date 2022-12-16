<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisputesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disputes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 800)->nullable();
            $table->string('definition', 800)->nullable();
            $table->string('IRI', 800)->nullable();
            $table->string('deprecated_reason', 800)->nullable();
            $table->string('disputed_by', 800)->nullable();
            $table->string('disputed_reason', 800)->nullable();
            $table->string('new_definition', 800)->nullable();
            $table->string('example_sentence', 800)->nullable();
            $table->string('taxa', 800)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disputes');
    }
}
