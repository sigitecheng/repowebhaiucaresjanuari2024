<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\be_datakontraktor>
 */
class Be_datakontraktorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $alamatIndonesia = [
            'Jakarta', 'Bandung', 'Semarang', 'Surabaya', 'Yogyakarta', 
            'Banten', 'Jawa Barat', 'Jawa Tengah', 'Jawa Timur', 
            'Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Kepulauan Riau', 
            'Sumatera Selatan', 'Bangka Belitung', 'Lampung', 'Kalimantan Barat', 'Kalimantan Tengah', 
            'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Gorontalo', 
            'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Barat', 'Sulawesi Tenggara', 'Bali', 
            'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Maluku', 'Maluku Utara', 'Papua', 'Papua Barat'
        ];
    
        return [
            'nama_perusahaan' => $this->faker->company,
            'alamat' => $this->faker->address,
            'kota' => $this->faker->randomElement($alamatIndonesia),
            'nomor_telepon' => $this->faker->numerify('08##########'),
            'email' => $this->faker->unique()->email,
            'pimpinan_perusahaan' => $this->faker->name,
            'sertifikat' => $this->faker->word,
            'pengalaman' => $this->faker->text(1000),
            'bidang_keahlian' => $this->faker->text(1000),
            'dokumen' => $this->faker->word . '.pdf',
        ];
    }
}
