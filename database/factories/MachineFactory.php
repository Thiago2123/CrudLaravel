<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->unique()->word()
            //'teste'=> $this->faker->unique()->word(),
        ];
    }
}
