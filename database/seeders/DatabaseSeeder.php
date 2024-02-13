<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Dataproject_status;

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
        Dataproject_status::create([
            'status'  => 'Selesai',
            'slug'  => 'selesai'
        ]);

        Dataproject_status::create([
            'status'  => 'Pending',
            'slug'  => 'pending'
        ]);

        Dataproject_status::create([
            'status'  => 'Tertunda',
            'slug'  => 'tertunda'
        ]);

        Dataproject_status::create([
            'status'  => 'Sedang Berjalan',
            'slug'  => 'sedang_berjalan'
        ]);


        Post::factory(100)->create();

    }
}
