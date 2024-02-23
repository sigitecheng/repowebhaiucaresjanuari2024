<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Be_datainstansipendidikan>
 */
class Be_datainstansipendidikanFactory extends Factory
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

        $daftarInstansiPendidikan = [
            // SMA
            'SMA Negeri 1 Jakarta',
            'SMA Negeri 2 Surabaya',
            'SMA Negeri 3 Bandung',
            'SMA Negeri 4 Semarang',
            'SMA Negeri 5 Yogyakarta',
            'SMA Negeri 6 Malang',
            'SMA Negeri 7 Solo',
            'SMA Negeri 8 Surakarta',
            'SMA Negeri 9 Bogor',
            'SMA Negeri 10 Depok',
            'SMA Negeri 11 Tangerang',
            'SMA Negeri 12 Bekasi',
            'SMA Negeri 13 Cirebon',
            'SMA Negeri 14 Magelang',
            'SMA Negeri 15 Purwokerto',
            'SMA Negeri 16 Purwakarta',
            'SMA Negeri 17 Tasikmalaya',
            'SMA Negeri 18 Kuningan',
            'SMA Negeri 19 Majalengka',
            'SMA Negeri 20 Subang',
            // Perguruan Tinggi
            'Universitas Indonesia (UI)',
            'Institut Teknologi Bandung (ITB)',
            'Universitas Gadjah Mada (UGM)',
            'Institut Pertanian Bogor (IPB)',
            'Universitas Airlangga (UNAIR)',
            'Universitas Diponegoro (UNDIP)',
            'Institut Teknologi Sepuluh Nopember (ITS)',
            'Universitas Brawijaya (UB)',
            'Universitas Sebelas Maret (UNS)',
            'Universitas Padjadjaran (UNPAD)',
            'Universitas Negeri Semarang (UNNES)',
            'Universitas Negeri Yogyakarta (UNY)',
            'Universitas Islam Indonesia (UII)',
            'Universitas Muhammadiyah Malang (UMM)',
            'Universitas Katolik Parahyangan (UNPAR)',
            'Universitas Telkom (TEL-U)',
            'Universitas Mercu Buana (UMB)',
            'Universitas Jember (UNEJ)',
            'Universitas Kristen Satya Wacana (UKSW)',
            'Universitas Negeri Malang (UM)',
            // Tambahkan lebih banyak instansi pendidikan sesuai kebutuhan
        ];
        

        return [
            'nama_instansi' => $this->faker->randomElement($daftarInstansiPendidikan),
            'alamat' => $this->faker->address,
            'kota' => $this->faker->randomElement($alamatIndonesia),
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'kepala_sekolah' => $this->faker->name,
            'akreditasi' => $this->faker->word,
            'pengalaman' => $this->faker->text,
            'dokumen' => $this->faker->word . '.pdf',
            'jumlah_guru' => $this->faker->numberBetween(10, 100),
            'jumlah_siswa' => $this->faker->numberBetween(100, 1000),
            'fasilitas_olahraga' => $this->faker->boolean,
            'deskripsi' => $this->faker->paragraph,
            //
        ];
    }
}
