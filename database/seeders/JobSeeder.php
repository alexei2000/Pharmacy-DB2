<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job1 = new Job();
        $job1->name = "Farmaceutico";
        $job1->save();

        $job2 = new Job();
        $job2->name = "Cajero";
        $job2->save();

        $job3 = new Job();
        $job3->name = "Administrador";
        $job3->save();

        $job4 = new Job();
        $job4->name = "Conserje";
        $job4->save();
    }
}
