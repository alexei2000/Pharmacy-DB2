<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id" => $this->faker->ean8(),
            "imageUrl" => $this->faker->imageUrl(150, 150),
            "name" => $this->faker->name(),
            "last_name" => $this->faker->name(),
            "phone_number" => $this->faker->numerify("0424-###-####"),
            "job" => $this->faker->randomElement(["farmaceutico", "cajero"]),
            "email" => $this->faker->email(),
            "date_of_birth" => $this->faker->dateTimeBetween(),
            "gender" => $this->faker->randomElement(["male", "female"]),
        ];
    }
}
