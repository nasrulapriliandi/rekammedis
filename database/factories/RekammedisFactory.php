<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekammedis>
 */
class RekammedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'norekammedis' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'pasien_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'diagnosa_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'obat_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'tgl_berobat' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
