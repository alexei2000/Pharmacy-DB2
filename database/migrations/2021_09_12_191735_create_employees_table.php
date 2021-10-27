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
            $table->string("imageUrl")->nullable();
            $table->foreignId("pharmacy_id")->constrained("pharmacies")->onDelete('cascade');
            $table->string("name");
            $table->string("last_name");
            $table->string("phone_number")->unique();;
            $table->foreignId("job_id")->constrained("jobs");
            $table->string("email")->unique();
            $table->date("date_of_birth");
            $table->enum("gender", ["male", "female"]);
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
