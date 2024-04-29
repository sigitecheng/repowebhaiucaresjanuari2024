<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Datapekerjaanstatus;
use App\Models\Fe_adminberanda;
use App\Models\Be_datakontraktor;
use App\Models\Be_datarumahmakan;
use App\Models\Be_datarumahsakit;
use App\Models\Be_datainstansipendidikan;
use App\Models\Berita;
use App\Models\Datapenanggungjawab;
use App\Models\Datapengawaslapangan;

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

        User::create([
            'name'  => 'Haiu',
            'username' => 'Haiu',
            'email' => 'hbi@haiucares.com',
            'password' => bcrypt('adminadmin')
        ]);


        User::factory(50)->create();



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

        // ==================================================================
        Fe_adminberanda::create([
            'beranda1'          => 'Tangan Membantu Menginspirasi Perubahan Bersama',
            'beranda2'          => '"Tangan membantu merupakan sumber inspirasi untuk menciptakan perubahan bersama"',
            'visi'              => '"Menjadi pionir dalam membentuk Indonesia yang berdaya, berinspirasi, dan terjalin erat melalui tangan bantuan yang memberikan dampak nyata, menciptakan perubahan positif, dan memperkuat fondasi bagi pertumbuhan dan kemajuan bersama."',
            'misi'              => '"Menjadi agen perubahan yang mendukung masyarakat Indonesia dengan memberikan tangan bantuan yang membawa inspirasi, menyokong perubahan positif, dan membangun sinergi bersama demi kemajuan dan kesejahteraan bersama"',
            'fokus_pekerjaan'   => 'Dalam menghadapi realitas bangunan tak layak, kebutuhan akan makanan gratis, dan tantangan akses pendidikan yang terbatas, kami berkomitmen untuk merangkul misi kemanusiaan. Melalui inisiatif kami, kami berupaya memberikan bantuan sejauh yang kami mampu, menyediakan bantuan pangan secara gratis, dan memberikan kesempatan pendidikan kepada mereka yang kurang beruntung. Bersama-sama, kami berusaha membangun fondasi yang lebih kokoh untuk kesejahteraan dan pertumbuhan masyarakat.',
            'tentang_kami'      => '"Kami adalah perusahaan yang didedikasikan untuk misi kemanusiaan. Dalam setiap langkah dan inisiatif kami, tujuan utama adalah memberikan kontribusi positif kepada masyarakat dan dunia"',
            'layanan_kami'      => 'Kami merupakan pilar utama dalam sektor kemanusiaan, menyelenggarakan berbagai layanan di bidang infrastruktur, kesehatan, pendidikan, lapangan kerja, dan distribusi barang. Melalui inisiatif ini, kami bertekad untuk membawa perubahan positif kepada masyarakat, menciptakan lingkungan yang berkelanjutan, dan memberikan dukungan yang sangat dibutuhkan untuk meningkatkan kualitas hidup dan kesejahteraan umum.',
            'donasi'            => 'Program Donasi kami bertujuan untuk memberikan dampak positif melalui kontribusi pada infrastruktur, pendidikan, kesehatan, dan pangan. Dengan dukungan ini, kami berkomitmen meningkatkan kualitas hidup dan menciptakan perubahan positif dalam berbagai aspek kehidupan sehari-hari masyarakat.',
            'project_kami'      =>  'Program Kemanusiaan Kami berfokus pada inisiatif kontribusi positif dalam pengembangan infrastruktur, pendidikan, kesehatan, dan pangan. Daftar program ini mewakili komitmen kami untuk meningkatkan kualitas hidup dan membawa perubahan positif dalam berbagai aspek kehidupan masyarakat yang membutuhkan. Di HaiuCare, kami memberikan bantuan pada setiap program kemanusiaan ini dengan harapan dapat memberikan dampak yang signifikan.'
        ]);
        
        Post::create([
            'category_id'                           => 4,
            'user_id'                               => 3,
            'be_datakontraktor_id'               => 3,
            'be_datarumahmakan_id'               => 3,
            'be_datarumahsakit_id'               => 3,
            'be_datainstansipendidikan_id'               => 3,
            'datapenanggungjawab_id'               => 3,
            'datapengawaslapangan_id'               => 3,
            'datapekerjaanstatus_id'               => 3,
            'image'                 => "fe_web/beranda/warteg.jpg",
            'title'                 => "Warung Makan Gratis untuk Warga Yang Kelaparan",
            'slug'                  => 'warung-makan',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'bandung',
            'anggaran'              => 10000000,
            'waktu_pelaksanaan'     => 100,
            'tanggal_mulai'     => "1972-02-01",
            'tanggal_selesai'     => "2019-10-10",
        ]);

        Post::create([
            'category_id'                           => 4,
            'user_id'                               => 3,
            'be_datakontraktor_id'               => 3,
            'be_datarumahmakan_id'               => 3,
            'be_datarumahsakit_id'               => 3,
            'be_datainstansipendidikan_id'               => 3,
            'datapenanggungjawab_id'               => 3,
            'datapengawaslapangan_id'               => 3,
            'datapekerjaanstatus_id'               => 3,
            'image'                 => "fe_web/beranda/warteg.jpg",
            'title'                 => "Mobil berbakti menggerakan kebaikan untuk makanan gratis",
            'slug'                  => 'mobil-berbakti',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'bandung',
            'anggaran'              => 2000000,
            'waktu_pelaksanaan'     => 100,
            'tanggal_mulai'     => "1972-02-01",
            'tanggal_selesai'     => "2019-10-10",
        ]);

        Post::create([
            'category_id'                           => 4,
            'user_id'                               => 3,
            'be_datakontraktor_id'               => 3,
            'be_datarumahmakan_id'               => 3,
            'be_datarumahsakit_id'               => 3,
            'be_datainstansipendidikan_id'               => 3,
            'datapenanggungjawab_id'               => 3,
            'datapengawaslapangan_id'               => 3,
            'datapekerjaanstatus_id'               => 3,
            'image'                 => "fe_web/beranda/warteg.jpg",
            'title'                 => "Panci kebaikan membantu para tukang masak untuk menyiapkan makanan ",
            'slug'                  => 'panci-kebaikan',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'bandung',
            'anggaran'              => 1000000,
            'waktu_pelaksanaan'     => 100,
            'tanggal_mulai'     => "1972-02-01",
            'tanggal_selesai'     => "2019-10-10",
        ]);

        // Post::factory(3)->create();
        Be_datakontraktor::factory(15)->create();
        be_datarumahmakan::factory(15)->create();
        be_datarumahsakit::factory(15)->create();
        Be_datainstansipendidikan::factory(15)->create();
        Datapenanggungjawab::factory(6)->create();
        Datapengawaslapangan::factory(6)->create();
        Berita::factory(15)->create();
    }
}
