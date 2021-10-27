<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Pharmacist;
use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pharmacist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "employee_id" => Employee::factory(),
            'tuition_number' => $this->faker->unique()->randomNumber(),
            'health_number' => $this->faker->unique()->randomNumber(),
        ];
    }
}
