<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_characters', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 573)->nullable();
            $table->string('IRI', 255)->nullable();
            $table->string('method_from', 573)->nullable();
            $table->string('method_to', 573)->nullable();
            $table->string('method_include', 573)->nullable();
            $table->string('method_exclude', 573)->nullable();
            $table->string('method_where', 573)->nullable();
            $table->string('unit', 573)->nullable();
            $table->string('creator', 573)->nullable();
            $table->boolean('standard')->nullable();
            $table->string('standard_tag', 150)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('username', 573)->nullable();
            $table->integer('usage_count')->nullable();
            $table->boolean('show_flag')->nullable();
            $table->string('parent_term', 800)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standard_characters');
    }
}
