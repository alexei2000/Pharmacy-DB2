<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies_medicines', function (Blueprint $table) {
            $table->integer("stock")->unsigned();
            $table->foreignId("medicine_id")->constrained("medicines")->onDelete("cascade");
            $table->foreignId("pharmacy_id")->constrained("pharmacies")->onDelete("cascade");
            $table->primary(["medicine_id","pharmacy_id"]);
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
        Schema::dropIfExists('pharmacies_medicines');
    }
}
