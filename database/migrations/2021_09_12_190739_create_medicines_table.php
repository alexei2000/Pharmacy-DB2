<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId("laboratory_id")->nullable()->constrained("laboratories");
            $table->string("name");
            $table->string("principal_component");
            $table->string("monodrug");
            $table->integer("content");
            $table->enum("unit", ["l", "ml", "g",  "mg"]);
            $table->string("therapeutic_action");
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
        Schema::dropIfExists('medicines');
    }
}
