<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistUniversityDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacist_university_degrees', function (Blueprint $table) {
            $table->id();
            $table->string("pharmacist_id");
            $table->integer("registry_number")->unique();
            $table->string("university");
            $table->date("date_of_graduation");
            $table->timestamps();
        });
        Schema::table('pharmacist_university_degrees', function (Blueprint $table) {
            $table->foreign("pharmacist_id")->references('employee_id')->on('pharmacists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacist_university_degrees');
    }
}
