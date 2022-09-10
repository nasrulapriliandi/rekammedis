<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obat>
 */
class ObatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'obat' => $this->faker->numerify('Obat ###'),
            'keterangan' => $this->faker->sentence($nbWords = 20, $variableNbWords = true)
        ];
    }
}
