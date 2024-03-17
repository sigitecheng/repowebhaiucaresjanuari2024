<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Whoops\Run;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomDays = $this->faker->numberBetween(1, 200);
        $date = $this->faker->date('Y-m-d', '-200 days', '+200 days');

        return [
            'user_id' => mt_rand(1, 8),
            'category_id' => mt_rand(1, 4),
            'be_datakontraktor_id' => $this->faker->numberBetween(1, 20), // Ganti dengan jumlah kontraktor yang sesuai
            'be_datarumahmakan_id' => $this->faker->numberBetween(1, 20), // Ganti dengan jumlah kontraktor yang sesuai
            'be_datarumahsakit_id' => $this->faker->numberBetween(1, 20), // Ganti dengan jumlah kontraktor yang sesuai
            'be_datainstansipendidikan_id' => $this->faker->numberBetween(1, 20), // Ganti dengan jumlah kontraktor yang sesuai
            'datapenanggungjawab_id' => $this->faker->numberBetween(1, 15), // Ganti dengan jumlah penanggung jawab yang sesuai
            'datapengawaslapangan_id' => $this->faker->numberBetween(1, 15), // Ganti dengan jumlah pengawas lapangan yang sesuai
            'datapekerjaanstatus_id' => mt_rand(1, 4),
            'title' => $this->faker->sentence(mt_rand(5, 10)),
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(),
            // 'image' => $this->faker->image(storage_path('app/public/images'), 400, 300, null, false),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => $this->faker->paragraphs(mt_rand(15, 30,)), (CARA PERTAMA)
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(15, 30,))) . '</p>', (CARA KEDUA)
            'body' => collect($this->faker->paragraphs(mt_rand(5, 15,)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            
            'lokasi' => $this->faker->address,
            'anggaran' => $this->faker->randomFloat(2, 100000, 1000000),
            // 'waktu_pelaksanaan' => $this->faker->date(),
            'waktu_pelaksanaan' => $randomDays,
            'tanggal_mulai' => $this->faker->date(),
            'tanggal_selesai' => $this->faker->optional(0.7)->date(),
            'published_at' => $this->faker->optional(0.8)->dateTimeThisMonth,
            'created_at' => now(),
            'updated_at' => now(),
        ];        
    }
}
