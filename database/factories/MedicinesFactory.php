<?php

namespace Database\Factories;

use App\Models\Medicines;
use App\Models\Laboratories;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicinesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = medicines::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrayValues = ['l', 'ml', 'g', 'mg'];
        return [
            "id" => $this->faker->ean8(),
            // "id" => Laboratories::inRandomOrder()->first()->id,
            // "laboratory_id" => $this->faker->numberBetween(1, App\Models\Medicines::count()),
            "laboratory_id" => Laboratories::inRandomOrder()->first()->id,
            "name" => $this->faker->name(),
            "principal_component" => $this->faker->name(),
            "monodrug" => $this->faker->name(),
            "content" => $this->faker->numberBetween(1,100),
            "unit" => $this->faker->randomElement(['l','ml','g','mg']),
            "therapeutic_action" => $this->faker->sentence(10),
        ];
    }
}
