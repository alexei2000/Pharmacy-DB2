<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersMedicinesResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders_medicines_responses', function (Blueprint $table) {
            $table->foreignId("orders_medicines_id")->primary()->constrained("purchase_orders_medicines")->onDelete("cascade");
            $table->integer("amount")->unsigned();
            $table->unsignedDecimal("unit_price",8,2);
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
        Schema::dropIfExists('purchase_orders_medicines_responses');
    }
}
