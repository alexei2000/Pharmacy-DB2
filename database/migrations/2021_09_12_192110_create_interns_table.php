<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->string("employee_id")->primary();
            $table->string("permission_code")->unique();
            $table->string("legal_representative_id");
            $table->string("speciality");
            $table->string("university");
            $table->date("initial_date");
            $table->date("final_date");
            $table->timestamps();
        });
        Schema::table('interns', function (Blueprint $table) {
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");
            $table->foreign("legal_representative_id")->nullable()->references("id")->on("legal_representatives");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interns');
    }
}
