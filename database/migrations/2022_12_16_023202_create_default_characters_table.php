<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_characters', function (Blueprint $table) {
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
            $table->integer('usage_count')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('show_flag')->nullable();
            $table->json('images')->nullable();
            $table->boolean('numeric_flag')->default(false);
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
        Schema::dropIfExists('default_characters');
    }
}
