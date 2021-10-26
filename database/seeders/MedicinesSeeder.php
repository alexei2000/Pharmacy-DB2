<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicines;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicines::factory(8)->create();
    }
}
