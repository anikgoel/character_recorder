<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonColorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_color_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('value_id')->nullable()->index();
            $table->string('negation', 150)->nullable();
            $table->string('pre_constraint', 150)->nullable();
            $table->string('certainty_constraint', 150)->nullable();
            $table->string('degree_constraint', 150)->nullable();
            $table->string('main_value', 150)->nullable();
            $table->string('main_value_IRI', 255)->nullable();
            $table->string('post_constraint', 150)->nullable();
            $table->boolean('not_remove')->nullable();
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
        Schema::dropIfExists('non_color_details');
    }
}
