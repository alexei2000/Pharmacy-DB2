<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboratories;

class LaboratoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboratories::factory(5)->create();
    }
}
