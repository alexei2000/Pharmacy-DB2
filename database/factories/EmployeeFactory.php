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
            "imageUrl" => $this->faker->randomElement(["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg"]),
            "name" => $this->faker->name(),
            "last_name" => $this->faker->name(),
            "phone_number" => $this->faker->numerify("0424-###-####"),
            "email" => $this->faker->email(),
            "date_of_birth" => $this->faker->dateTimeBetween(),
            "gender" => $this->faker->randomElement(["male", "female"]),
            "job_id" => $this->faker->randomElement([1, 2, 3, 4]),
            "pharmacy_id" => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
