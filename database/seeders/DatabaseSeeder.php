<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeeSeeder::class);
        $this->call(PharmacySeeder::class);
<<<<<<< HEAD
        \App\Models\User::factory(10)->create();
=======
>>>>>>> feature/dashboard
    }
}
