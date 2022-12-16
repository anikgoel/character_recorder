<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('IRI', 255)->nullable();
            $table->string('parent_term', 800)->nullable();
            $table->string('method_from', 573)->nullable();
            $table->string('method_to', 573)->nullable();
            $table->string('method_include', 573)->nullable();
            $table->string('method_exclude', 573)->nullable();
            $table->string('method_where', 573)->nullable();
            $table->string('method_as', 573)->nullable();
            $table->string('elucidation', 573)->nullable();
            $table->string('creator', 573)->nullable();
            $table->string('unit', 573)->nullable();
            $table->boolean('standard')->nullable();
            $table->string('username')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('standard_tag', 150)->nullable();
            $table->string('summary', 150)->nullable();
            $table->string('usage_count')->nullable()->default('0');
            $table->integer('order')->nullable();
            $table->boolean('show_flag')->nullable();
            $table->json('images')->nullable();
            $table->boolean('numeric_flag')->default(false);
            $table->string('auto_fill_value')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('characters');
    }
}
