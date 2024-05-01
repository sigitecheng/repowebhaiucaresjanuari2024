<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Danamasyarakat>
 */
class DanamasyarakatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_telp' => $this->faker->phoneNumber,
            'jumlah_donasi' => $this->faker->numberBetween(0, 1000000000), // Menggunakan numberBetween untuk nilai acak antara 0 dan 1 miliar
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Contoh: menggunakan waktu dalam satu tahun terakhir
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            //
        ];
    }
}
