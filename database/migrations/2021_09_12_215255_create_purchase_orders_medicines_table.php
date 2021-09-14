<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders_medicines', function (Blueprint $table) {
            $table->id();
            $table->integer("amount")->unsigned();
            $table->foreignId("purchase_order_id")->constrained("purchase_orders")->onDelete("cascade");
            $table->foreignId("medicine_id")->nullable()->constrained("medicines");
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
        Schema::dropIfExists('purchase_orders_medicines');
    }
}
