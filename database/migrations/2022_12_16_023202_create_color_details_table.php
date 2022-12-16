<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('value_id')->nullable()->index();
            $table->string('negation', 150)->nullable();
            $table->string('pre_constraint', 150)->nullable();
            $table->string('certainty_constraint', 150)->nullable();
            $table->string('degree_constraint', 150)->nullable();
            $table->string('brightness', 150)->nullable();
            $table->string('brightness_IRI', 255)->nullable();
            $table->string('reflectance', 150)->nullable();
            $table->string('reflectance_IRI', 255)->nullable();
            $table->string('saturation', 150)->nullable();
            $table->string('saturation_IRI', 255)->nullable();
            $table->string('colored', 150)->nullable();
            $table->string('colored_IRI', 255)->nullable();
            $table->string('multi_colored', 150)->nullable();
            $table->string('multi_colored_IRI', 255)->nullable();
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
        Schema::dropIfExists('color_details');
    }
}
