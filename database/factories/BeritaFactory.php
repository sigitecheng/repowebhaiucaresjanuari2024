<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
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
            'user_id' => mt_rand(1, 8),
            'judul' => $this->faker->sentence,
            'gambar' => $this->faker->imageUrl(640, 480, 'news'),
            'isi' => $this->faker->paragraphs(3, true),
            'tanggal_dibuat' => Carbon::now()->subDays(rand(1, 30)), // Tanggal berita dibuat antara 1-30 hari yang lalu
            'lokasi' => $this->faker->city,
        ];
    }
}
