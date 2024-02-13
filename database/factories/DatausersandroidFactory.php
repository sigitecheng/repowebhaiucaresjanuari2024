<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datausersandroid>
 */
class DatausersandroidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'no_telepon' => $this->faker->phoneNumber,
            'domisili_kota' => $this->faker->city,
            'alamat_rumah' => $this->faker->address,
            'created_at' => now(),
            'updated_at' => now(),  
        ];
    }
}
