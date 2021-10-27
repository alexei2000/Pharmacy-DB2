<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Pharmacist;
use Illuminate\Database\Seeder;

class PharmacistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pharmacist::factory(10)->create();
    }
}
