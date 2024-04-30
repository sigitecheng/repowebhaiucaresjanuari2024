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
use App\Models\Mitra;
use App\Models\Sponsor;
use Carbon\Carbon;

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
            'image'                 => "img/fe_web/beranda/warteg.jpg",
            'title'                 => "Warung Makan Gratis untuk Warga Yang Kelaparan",
            'slug'                  => 'warung-makan',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'jakarta',
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
            'image'                 => "img/fe_web/beranda/mobil.jpg",
            'title'                 => "Mobil berbakti menggerakan kebaikan untuk makanan gratis",
            'slug'                  => 'mobil-berbakti',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'bandung',
            'anggaran'              => 200000000,
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
            'image'                 => "img/fe_web/beranda/dapur.jpg",
            'title'                 => "Panci kebaikan membantu para tukang masak untuk menyiapkan makanan ",
            'slug'                  => 'panci-kebaikan',
            // 'body'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            // 'excerpt'                  => "Piring Peduli adalah inisiatif kemanusiaan yang bertujuan untuk memberikan bantuan makanan kepada masyarakat yang membutuhkan. Program ini merupakan upaya kolaboratif antara Warteg Cileunyi dan berbagai pihak yang peduli terhadap keberlangsungan hidup sesama",
            'lokasi'                => 'surabaya',
            'anggaran'              => 1000000,
            'waktu_pelaksanaan'     => 100,
            'tanggal_mulai'     => "1972-02-01",
            'tanggal_selesai'     => "2019-10-10",
        ]);

        Berita::create([
            'user_id'       => 1, // Ganti dengan ID user yang sesuai
            'judul'         => 'Kebaikan yang Tak Terbatas: Kisah Perjuangan Seorang Relawan dalam Menghidupkan Program Makan Gratis di Kota Terpencil',
            'gambar'        => 'makanan',
            'isi'           => 'Di tengah gemuruh kota-kota besar yang sering menjadi pusat perhatian, terdapat kisah-kisah kebaikan yang tak terduga di sudut-sudut terpencil. Salah satunya adalah kisah perjuangan seorang relawan yang dengan gigih menghidupkan sebuah program makan gratis di sebuah kota terpencil yang jarang tersentuh bantuan dari luar.
            
            Bertahun-tahun lamanya, warga di kota ini merasakan kesulitan akses terhadap makanan yang layak. Dengan minimnya lapangan pekerjaan dan jarak yang jauh dari pusat distribusi, masyarakat terpinggirkan di negeri sendiri. Namun, keadaan ini tak menyurutkan semangat seorang relawan lokal yang memutuskan untuk bertindak.
            
            Dengan tekad yang bulat dan hati yang penuh empati, relawan ini membangun jaringan kerja sama dengan toko-toko lokal dan petani di sekitar kota. Melalui donasi sukarela dan bantuan dari komunitas lokal, ia berhasil mengumpulkan bahan makanan yang cukup untuk memulai program makan gratis.
            
            Perjuangan tak berhenti sampai di situ. Relawan ini juga harus menghadapi tantangan logistik yang berat, mengatur distribusi makanan ke tempat-tempat terpencil yang sulit dijangkau. Namun, dengan semangat pantang menyerah dan dukungan dari sukarelawan lainnya, ia berhasil menyediakan makanan yang bergizi bagi ratusan warga setiap hari.
            
            Kisah ini bukan hanya tentang makanan. Ini adalah tentang kepedulian, perjuangan, dan keberanian untuk berbuat baik meskipun dalam keterbatasan. Dengan setiap piring yang disajikan, relawan ini tidak hanya memberikan makanan, tetapi juga memberikan harapan dan kehangatan kepada masyarakat yang membutuhkan.',
            'tanggal_dibuat' => Carbon::now(),
            'lokasi'        => 'malang',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),         
        ]);
        
        Berita::create([
            'user_id'       => 1, // Ganti dengan ID user yang sesuai
            'judul'         => 'Satu Piring, Banyak Harapan: Dibalik Kisah Inspiratif Seorang Pengusaha yang Menggelar Program Makan Gratis untuk Masyarakat Terdampak Krisis Ekonomi',
            'gambar'        => 'makanan',
            'isi'           => 'Dalam suasana krisis ekonomi yang memunculkan keterpurukan di banyak lapisan masyarakat, satu sosok pengusaha membawa sinar harapan dengan menginisiasi program makan gratis. Kisah inspiratif ini muncul dari kepedulian mendalam terhadap sesama serta keinginan kuat untuk berbagi rezeki di tengah-tengah kesulitan yang melanda.
            
            Sebagai seorang pengusaha sukses, ia menyadari betul dampak yang dirasakan oleh masyarakat yang terdampak langsung oleh krisis ekonomi. Tanpa ragu, ia memutuskan untuk mengalihkan sebagian dari sumber daya dan keuntungannya untuk membantu mereka yang membutuhkan.
            
            Dengan menggandeng restoran-restoran lokal dan menyatukan kekuatan dengan komunitas bisnis setempat, program makan gratis ini menjadi sebuah kenyataan. Setiap hari, piring-piring makanan lezat disajikan kepada mereka yang membutuhkan, membawa tidak hanya kelegaan fisik namun juga kehangatan emosional di saat-saat sulit.
            
            Melalui kesederhanaan sebuah piring makanan, tergambar harapan yang besar. Pengusaha ini membuktikan bahwa dengan sedikit kebaikan dan kepedulian, kita semua bisa menjadi agen perubahan dalam membangun solidaritas dan kesejahteraan di tengah-tengah dunia yang terus berubah.',
            
            'tanggal_dibuat' => Carbon::now(),
            'lokasi'        => 'malang',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),         
        ]);
        Berita::create([
            'user_id'       => 1, // Ganti dengan ID user yang sesuai
            'judul'         => 'Cerita Penuh Haru: Para Pengusaha Menjadi Pahlawan Lokal Melalui Inisiatif Membagikan Makanan Gratis kepada Sesama',
            'gambar'        => 'makanan',
            'isi'           => 'Dalam masa sulit ini, kita sering kali menemukan pahlawan di tempat yang tidak terduga. Kisah yang mengharukan datang dari sekelompok pengusaha yang, meski terkena dampak ekonomi yang serius, memilih untuk menjadi pahlawan lokal dengan membagikan makanan gratis kepada sesama.
            
            Keputusan mereka untuk berbagi rezeki tidak datang dengan mudah. Banyak dari mereka menghadapi tekanan finansial yang besar akibat situasi ekonomi yang memburuk. Namun, mereka memilih untuk melihat ke luar dan membantu mereka yang membutuhkan, tanpa mempedulikan kesulitan yang mereka hadapi sendiri.
            
            Dengan koordinasi yang cermat dan semangat yang tak kenal lelah, para pengusaha ini mengatur program pembagian makanan gratis di berbagai sudut kota. Mereka bekerja sama dengan restoran-restoran setempat dan organisasi amal untuk menyediakan makanan bergizi bagi mereka yang terdampak langsung oleh krisis.
            
            Cerita ini bukan hanya tentang memberi makanan, tetapi juga tentang memberi harapan. Melalui kebaikan mereka, para pengusaha ini tidak hanya memberikan makanan, tetapi juga menunjukkan bahwa dalam kesulitan, kita dapat tetap bersatu dan saling mendukung. Mereka adalah contoh nyata bahwa dalam kegelapan, ada cahaya, dan dalam kesulitan, ada kebaikan yang tetap bersinar terang.',
            
            'tanggal_dibuat' => Carbon::now(),
            
            'lokasi'        => 'malang',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),         
        ]);


        // Post::factory(3)->create();
        Be_datakontraktor::factory(15)->create();
        be_datarumahmakan::factory(15)->create();
        be_datarumahsakit::factory(15)->create();
        Be_datainstansipendidikan::factory(15)->create();
        Datapenanggungjawab::factory(6)->create();
        Datapengawaslapangan::factory(6)->create();
        // Berita::factory(3)->create();
        Sponsor::factory(4)->create();
        Mitra::factory(6)->create();
    }
}
