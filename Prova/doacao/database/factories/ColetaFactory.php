<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_id' => $this->faker->numberBetween(1, 10),
            'entidade_id' => $this->faker->numberBetween(1, 10),
            'quantidade' => $this->faker->numberBetween(1, 10),
            'data' => $this->faker->date(),
        ];
    }
}
