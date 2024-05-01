<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datapengawaslapangan>
 */
class DatapengawaslapanganFactory extends Factory
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
            // 'nama' => $this->faker->name,
            // 'email' => $this->faker->unique()->safeEmail,
            // 'telepon' => $this->faker->phoneNumber,
            // 'tanggal_lahir' => $this->faker->date,
            // 'ktp_number' => str_pad(strval($this->faker->unique()->numberBetween(1000000000000000, 9999999999999999)), 16, '0', STR_PAD_LEFT),
            // 'foto_npwp' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'foto_ktp' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'alamat' => $this->faker->address,
            // 'selfie_photo' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            // 'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            // 'pendidikan_terakhir' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3']),
            // 'pekerjaan' => $this->faker->jobTitle,
            // 'nama_perusahaan' => $this->faker->company,
            // 'npwp' => str_pad(strval($this->faker->unique()->numberBetween(1000000000000000, 9999999999999999)), 16, '0', STR_PAD_LEFT),
            

            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'no_telp' => $this->faker->phoneNumber,
            'jumlah_donasi' => $this->faker->numberBetween(0, 1000000000), // Menggunakan numberBetween untuk nilai acak antara 0 dan 1 miliar
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Contoh: menggunakan waktu dalam satu tahun terakhir
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
