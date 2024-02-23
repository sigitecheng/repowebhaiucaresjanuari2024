<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Be_datarumahsakit>
 */
class Be_datarumahsakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $daftarRumahSakit = [
            'RSUD Dr. Soetomo - Surabaya',
            'RSUD Sardjito - Yogyakarta',
            'RSUD Dr. Moewardi - Solo',
            'RSUD Dr. Saiful Anwar - Malang',
            'RSUD Dr. Soeradji Tirtonegoro - Klaten',
            'RSUD Dr. H. Abdul Moeloek - Lampung',
            'RSUD Dr. Tjitrowardojo - Purwokerto',
            'RSUD Dr. Kariadi - Semarang',
            'RSUD Dr. Sutomo - Medan',
            'RSUD Dr. Hasan Sadikin - Bandung',
            'RSUD Dr. Achmad Muchtar - Kudus',
            'RSUD Dr. Pirngadi - Medan',
            'RSUD Dr. Zainoel Abidin - Banda Aceh',
            'RSUD Dr. Wahidin Sudirohusodo - Makassar',
            'RSUD Dr. Soetomo - Surabaya',
            'RSUD Dr. Moewardi - Solo',
            'RSUD Dr. H. Abdul Moeloek - Lampung',
            'RSUD Dr. Kariadi - Semarang',
            'RSUD Dr. Sutomo - Medan',
            'RSUD Dr. Hasan Sadikin - Bandung',
            'RSUD Ibnu Sina - Gresik',
            'RSUD Banyumas',
            'RSUD Kota Yogyakarta',
            'RSUD dr. Sayidiman Magetan',
            'RSUD dr. R. Soedjati Soemodiardjo',
            'RSUD Dr. Soebandi Jember',
            'RSUD Dr. Loekmono Hadi Kota Madiun',
            'RSUD Kota Surakarta',
            'RSUD dr. Soedono Madiun',
            'RSUD Dr. Moewardi - Solo',
            'RSUD Dr. H. Abdul Moeloek - Lampung',
            'RSUD Dr. Kariadi - Semarang',
            'RSUD Dr. Sutomo - Medan',
            'RSUD Dr. Hasan Sadikin - Bandung',
            'RSUD Ibnu Sina - Gresik',
            'RSUD Banyumas',
            'RSUD Kota Yogyakarta',
            'RSUD dr. Sayidiman Magetan',
            'RSUD dr. R. Soedjati Soemodiardjo',
            'RSUD Dr. Soebandi Jember',
            'RSUD Dr. Loekmono Hadi Kota Madiun',
            'RSUD Kota Surakarta',
            'RSUD dr. Soedono Madiun',
            'RSUD Dr. Moewardi - Solo',
            'RSUD Dr. H. Abdul Moeloek - Lampung',
            'RSUD Dr. Kariadi - Semarang',
            'RSUD Dr. Sutomo - Medan',
            'RSUD Dr. Hasan Sadikin - Bandung',
        ];      
        
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
            'nama_rumahsakit' => $this->faker->randomElement($daftarRumahSakit),
            'alamat' => $this->faker->address,
            'kota' => $this->faker->randomElement($alamatIndonesia),
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'pemilik' => $this->faker->name,
            'sertifikat' => $this->faker->word,
            'pengalaman' => $this->faker->text,
            'dokumen' => $this->faker->word . '.pdf',
            'jumlah_dokter' => $this->faker->numberBetween(5, 50),
            'jumlah_perawat' => $this->faker->numberBetween(10, 100),
            'fasilitas_darurat' => $this->faker->boolean,
            'deskripsi' => $this->faker->paragraph(1,2),
            //
        ];
    }
}
