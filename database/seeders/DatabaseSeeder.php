<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Datapekerjaanstatus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'iqlima Nuri',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin')

        ]);


        User::factory(7)->create();



        Category::create([
            'nama_kategori'  => 'Infrastruktur',
            'slug' => 'infrastruktur'

        ]);


        Category::create([
            'nama_kategori'  => 'Pendidikan',
            'slug' => 'pendidikan'

        ]);

        Category::create([
            'nama_kategori'  => 'Kesehatan',
            'slug' => 'kesehatan'

        ]);

        Category::create([
            'nama_kategori'  => 'Makanan',
            'slug' => 'makanan'

        ]);

        // ------------------------------------------------------
        Datapekerjaanstatus::create([
            'nama_status'  => 'Selesai',
            'slug'  => 'selesai'
        ]);

        Datapekerjaanstatus::create([
            'nama_status'  => 'Pending',
            'slug'  => 'pending'
        ]);

        Datapekerjaanstatus::create([
            'nama_status'  => 'Tertunda',
            'slug'  => 'tertunda'
        ]);

        Datapekerjaanstatus::create([
            'nama_status'  => 'Sedang Berjalan',
            'slug'  => 'sedang_berjalan'
        ]);


        Post::factory(125)->create();

    }
}
