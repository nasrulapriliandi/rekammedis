<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnosa>
 */
class DiagnosaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'penyakit' => $this->faker->numerify('Penyakit ###'),
            'keterangan' => $this->faker->sentence($nbWords = 20, $variableNbWords = true)
        ];
    }
}
