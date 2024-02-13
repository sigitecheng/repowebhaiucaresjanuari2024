<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sigit>
 */
class FeadminberandaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'beranda1' => $this->faker->sentence(1,8),
            'beranda2' => $this->faker->sentence(1,8),
            'visi' => $this->faker->paragraph(1,8),
            'misi' => $this->faker->paragraph(1,8),
            'fokus_pekerjaan' => $this->faker->sentence(1,8),
            'judul_pekerjaan' => $this->faker->sentence(1,8),
            'keterangan_pekerjaan' => $this->faker->paragraph(1,8),
            
        ];
    }
}
