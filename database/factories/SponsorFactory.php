<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsor>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->company,
            'image' => $this->faker->imageUrl(), // Gambar dummy menggunakan URL acak
            'instagram' => $this->faker->userName,
            'tiktok' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'wa' => $this->faker->phoneNumber,
        ];
    }
}
