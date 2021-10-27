<?php

namespace Database\Factories;

use App\Models\Laboratory;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Laboratory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->ean8(),
            "name" => $this->faker->name(),
            "address" => $this->faker->address(),
            "email" => $this->faker->email(),
            "phone_number" => $this->faker->numerify("0424-###-####"),
        ];
    }
}
