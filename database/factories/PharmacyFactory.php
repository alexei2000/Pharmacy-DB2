<?php

namespace Database\Factories;

use App\Models\Pharmacy;
use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pharmacy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "state" => $this->faker->state(),
            "city" => $this->faker->city(),
            "postal_code" => $this->faker->postcode(),
            "phone_number" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "address" => $this->faker->address(),
        ];
    }
}
