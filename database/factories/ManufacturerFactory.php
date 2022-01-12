<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->company,
            "pib" => $this->faker->unique->regexify("[0-9]{15}"),
            "contact_email" => $this->faker->companyEmail,
            "pib" => $this->faker->phoneNumber
        ];
    }
}
