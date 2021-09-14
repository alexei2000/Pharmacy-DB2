<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->foreignId("pharmacy_id")->constrained("pharmacies");
            $table->string("name");
            $table->string("last_name");
            $table->string("phone_number")->unique();;
            $table->integer("charge");
            $table->string("email")->unique();
            $table->date("date_of_birth");
            $table->enum("gender",["male", "female"]);
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
        Schema::dropIfExists('employees');
    }
}
