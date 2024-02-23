<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\be_datarumahmakan>
 */
class Be_datarumahmakanFactory extends Factory
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

        $daftarRumahMakan = [
            'Warung Padang',
            'Sate Kambing H. Romli',
            'Bakmi GM',
            'Ayam Goreng Ny. Suharti',
            'Mie Ayam Bang Jono',
            'Nasi Goreng Bu Ratna',
            'Pecel Lele Mbok Darmi',
            'Soto Lamongan Pak Haji',
            'Bubur Ayam Barokah',
            'Martabak Boss',
            'Nasi Uduk Mas Joko',
            'Gado-Gado Bu Tati',
            'Mie Aceh Tumis Nangroe',
            'Bebek Bakar Wong Solo',
            'Rawon Setan Bu Sumi',
            'Sate Taichan Pak Broto',
            'Bakso Bakar Pak Kumis',
            'Sop Buntut Juara',
            'Nasi Kuning Bu Endang',
            'Sop Kaki Kambing Pak Slamet',
            'Ayam Penyet Bu Tuti',
            'Sate Padang Pak Datuk',
            'Nasi Goreng Mafia',
            'Pempek Palembang Bu Darmi',
            'Soto Betawi H. Husen',
            'Bakmi Jawa Mbah Mo',
            'Mie Goreng Mamah Muda',
            'Nasi Campur Bali Mbok Rai',
            'Pecel Ayam Kremes Pak Ndut',
            'Soto Ayam Mbah Marto',
            'Bebek Goreng H. Slamet',
            'Ayam Bakar Wong Solo',
            'Mie Ayam Bang Toyib',
            'Nasi Kucing Bu Lina',
            'Sop Iga Sapi Pak Aji',
            'Bakso Urat Bu Purnomo',
            'Sate Ayam Madura Pak Akim',
            'Rawon Pak Pangat',
            'Mie Aceh Keumamah',
            'Nasi Pecel Mbok Rah',
            'Gulai Kambing Pak Slamet',
            'Nasi Goreng Bu Joko',
            'Soto Banjar Pak Udin',
            'Bebek Goreng Mbok Harti',
            'Sate Padang Mak Syukur',
            'Sop Kambing Bang Tohir',
            'Bakmi Goreng Jawa Mbah Jono',
            'Ayam Penyet Bu Slamet',
            'Soto Ayam Lamongan Pak Djono',
            'Nasi Goreng Kampung Pak Mat',
        ]; 

        return [
            'nama_rumahmakan' => $this->faker->randomElement($daftarRumahMakan),
            'alamat' => $this->faker->address,
            'kota' => $this->faker->randomElement($alamatIndonesia),
            'nomor_telepon' => $this->faker->numerify('08##########'),
            'email' => $this->faker->unique()->email,
            'pemilik' => $this->faker->name,
            'sertifikat' => $this->faker->word,
            'pengalaman' => $this->faker->text(1000),
            'dokumen' => $this->faker->word . '.pdf'
            //
        ];
    }
}
