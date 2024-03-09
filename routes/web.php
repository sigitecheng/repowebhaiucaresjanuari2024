<?php


// use App\Models\Post;

use App\Http\Controllers\AdminDashboardController;
use App\Models\User;
use App\Models\Category;
use App\Models\Fe_adminberanda;
use App\Models\Post;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DatausersandroidController;
use App\Http\Controllers\Fe_AdminBerandaController;
use App\Http\Controllers\Be_DatakontraktorController;
use App\Http\Controllers\Be_DatarumahmakanController;
use App\Http\Controllers\Be_DatarumahsakitController;
use App\Http\Controllers\Be_DatainstansipendidikanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BussinessIntelligentController;
use App\Http\Controllers\RunningProjectController;
use App\Http\Controllers\DatapenanggungjawabController;
use App\Http\Controllers\DatapengawaslapanganController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LaporanKeuanganController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersProjectController;
use App\Http\Controllers\ErrorController;


use App\Models\Berita;
use App\Models\BussinessIntelligent;
use App\Models\Datapenanggungjawab;
use App\Models\Datapengawaslapangan;
use App\Models\Fe_adminberanda as ModelsFe_adminberanda;
use App\Models\RunningProject;

// use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB USERS

Route::get('/', function () {
    return view('frontendweb/home', [
        "title"             => "Bangun Indonesia",
        "active"            => "beranda",
        "imagehome"         =>  "frontendweb/home/feberanda.png",
        "imagehome2"        =>  "frontendweb/home/home2.png",
        "imagehome3"        =>  "frontendweb/home/berandabaru.png",
        "donasi1"           =>  "frontendweb/donasi/donasi1.jpg",
        "donasi2"           =>  "frontendweb/donasi/donasi2.jpg",
        "donasi3"           =>  "frontendweb/donasi/donasi3.jpg",
        "donasi4"           =>  "frontendweb/donasi/donasi4.jpg",
        "donasi5"           =>  "frontendweb/donasi/donasi5.jpg",
        "adminberanda"      =>  Fe_adminberanda::all(),
        'categories'        => Category::all(),
        'databerita'        => Berita::orderBy('created_at', 'asc')->paginate(6),
       
        $totalInfrastruktur = Post::where('category_id', 1)->count(),
        'totaldatainsfrastruktur' => $totalInfrastruktur,
        
        $totalPendidikan = Post::where('category_id', 2)->count(),
        'totaldatapendidikan' => $totalPendidikan,

        $totalKesehatan = Post::where('category_id', 3)->count(),
        'totaldatakesehatan' => $totalKesehatan,

        $totalMakanan = Post::where('category_id', 4)->count(),
        'totaldatamakanan' => $totalMakanan,

        $datausersCount = User::count(),
        'datausers'        => $datausersCount,

        $datapenanggungjawabCount = Datapenanggungjawab::count(),
        'datapenanggungjawab'        => $datapenanggungjawabCount,

        $totalInfrastruktur = number_format(Post::where('category_id', 1)->sum('anggaran'), 2, ',', '.'),
        'totalanggaraninfrastruktur' => $totalInfrastruktur,

        $totalPendidikan = number_format(Post::where('category_id', 2)->sum('anggaran'), 2, ',', '.'),
        'totalanggaranpendidikan' => $totalPendidikan,

        $totalKesehatan = number_format(Post::where('category_id', 3)->sum('anggaran'), 2, ',', '.'),
        'totalanggarankesehatan' => $totalKesehatan,

        $totalMakanan = number_format(Post::where('category_id', 4)->sum('anggaran'), 2, ',', '.'),
        'totalanggaranmakanan' => $totalMakanan,

    ]);
});
// ---------------------------------------------------------------------------------------
// ROUTE ADMIN DASHBOARD FRONTEND 
// ---------------------------------------------------------------------------------------
Route::resource('/adminberanda/post', Fe_AdminBerandaController::class)->middleware('auth');


// =======================================================================
// HALAMAAN DASHBOARD FRONTEND SUB PEKERJAAN

Route::get('/beranda/subpekerjaan', function () {

            $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->nama_kategori;
        }

        if (request('user')) {
            $author = User::firstWhere('username', request('user'));
            $title = ' by ' . $author->name;
        }

    return view('frontendweb/subberanda', [
        "title"             => $title ,
        "active"            => $title,
        'admintentangkami'  => Fe_adminberanda::all(),
        // 'categories'        => Category::all(),
            
        "datapekerjaan" => Post::filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),

        //  "post" => $post->get() // PAKET 2
        'categories'    => Category::all(),

        "imagesubberanda"         =>  "frontendweb/home/subberanda.png",
        "imagehome2"        =>  "frontendweb/home/home2.png",

    ]);
});
// =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB TENTANG

Route::get('/tentang', function () {
    return view('frontendweb/tentang', [
        "title"             => "Tentang",
        "active"            => 'tentang',
        "donasi5"           =>  "frontendweb/donasi/donasi5.jpg",
        "imagetentang"      =>  "frontendweb/tentang/fetentang.png",
        "imagetentang1"      =>  "frontendweb/tentang/tentang1.png",
        'admintentangkami'  => Fe_adminberanda::all(),
        'categories'        => Category::all()
    ]);
});

// ---------------------------------------------------------------------------------------
// ROUTE ADMIN DASHBOARD FRONTEND 
// ---------------------------------------------------------------------------------------
Route::get('/adminberanda/tentangkami', [Fe_AdminBerandaController::class, 'tentangkami'])->middleware('auth');
Route::get('/adminberanda/post/{tentang_kami}/tentangkamiedit', [Fe_AdminBerandaController::class, 'tentangkamiedit'])
    ->name('tentangkami.edit');
Route::put('/adminberanda/post/{tentang_kami}/update', [Fe_AdminBerandaController::class, 'tentangkamiupdate'])
    ->name('tentangkami.update');

    // =======================================================================
// HALAMAAN DASHBOARD FRONTEND WEB LAYANAN

Route::get('/layanan', function () {
    return view('frontendweb/layanan', [
        "title"             => "Layanan",
        "active"            => 'layanan',
        "imagelayanan"      =>  "frontendweb/layanan/felayanan.png",
        'adminlayanankami'  => Fe_adminberanda::all(),
        'categories'        => Category::all()
    ]);
});
// ---------------------------------------------------------------------------------------
// ROUTE ADMIN DASHBOARD FRONTEND 
// ---------------------------------------------------------------------------------------
Route::get('/adminberanda/layanankami', [Fe_AdminBerandaController::class, 'layanankami'])->middleware('auth');
Route::get('/adminberanda/post/{layanan_kami}/layanankamiedit', [Fe_AdminBerandaController::class, 'layanankamiedit'])
    ->name('layanankami.edit');
Route::patch('/adminberanda/post/{layanan_kami}/update', [Fe_AdminBerandaController::class, 'layanankamiupdate'])
        ->name('layanankami.update');
    


// =======================================================================
// HALAMAAN DONASI FRONTEND WEB LAYANAN

Route::get('/donasi', function () {
    return view('frontendweb/donasi', [
        "title"             => "Donasi",
        "active"            => 'donasi',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
        'admindonasi'           => Fe_adminberanda::all(),
        'categories'            => Category::all()
    ]);
});
// ---------------------------------------------------------------------------------------
// ROUTE ADMIN DASHBOARD FRONTEND 
// ---------------------------------------------------------------------------------------
Route::get('/adminberanda/donasi', [Fe_AdminBerandaController::class, 'donasi'])->middleware('auth');
Route::get('/adminberanda/post/{donasi}/donasiedit', [Fe_AdminBerandaController::class, 'donasiedit'])
    ->name('donasi.edit');
Route::patch('/donasi/{donasi}/update', [Fe_AdminBerandaController::class, 'donasiupdate'])
    ->name('donasi.update');
    




// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/project', function () {
    return view('frontendweb/project', [
        "title"             => "Infrastruktur",
        "active"            => 'project',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
        'adminprojectkami'      => Fe_adminberanda::all(),
        'categories'            => Category::all()
    ]);
});
// ---------------------------------------------------------------------------------------
// ROUTE ADMIN DASHBOARD FRONTEND 
// ---------------------------------------------------------------------------------------
Route::get('/adminberanda/projectkami', [Fe_AdminBerandaController::class, 'projectkami'])->middleware('auth');
Route::get('/adminberanda/post/{project_kami}/projectkamiedit', [Fe_AdminBerandaController::class, 'projectkamiedit'])
    ->name('projectkami.edit');
// Route::patch('/adminberanda/post/{project_kami}/update', [Fe_AdminBerandaController::class, 'projectkamiupdate'])
//     ->name('projectkami.update');
Route::patch('/projectkami/{project_kami}/update', [Fe_AdminBerandaController::class, 'projectkamiupdate'])
    ->name('projectkami.update');



// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectpendidikan', function () {
    return view('frontendweb/projectpendidikan', [
        "title"             => "Pendidikan",
        "active"            => 'pendidikan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});

// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectkesehatan', function () {
    return view('frontendweb/projectkesehatan', [
        "title"             => "Kesehatan",
        "active"            => 'kesehatan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});

// =======================================================================
// HALAMAAN PROJECT FRONTEND WEB PROJECT 

Route::get('/projectmakanan', function () {
    return view('frontendweb/projectmakanan', [
        "title"             => "Makanan",
        "active"            => 'makanan',
        "imagedonasi"           =>  "frontendweb/donasi/fedonasi.png",
        "imagedoninfra"         =>  "frontendweb/donasi/doninfrastruktur.jpg",
        "imagedonpendidikan"    =>  "frontendweb/donasi/donpendidikan.jpg",
        "imagedonkesehatan"     =>  "frontendweb/donasi/donkesehatan.jpg",
        "imagedonmakanan"       =>  "frontendweb/donasi/donmakanan.jpg",
    ]);
});




// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST 
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.reset');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


//Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard', function () {
    return view('backend/dashboard.index', [
        "title"             => "Dashboard",
        "title_dashboard"   => "Data Interface Dashboard",
        'categories'        => Category::all(),

        $datausersCount = User::count(),
        'datausers'        => $datausersCount,
        
        $datapostsCount = Post::count(),
        'datapost'        => $datapostsCount,

        $datapenanggungjawabCount = Datapenanggungjawab::count(),
        'datapenanggungjawab'        => $datapenanggungjawabCount,

        'dataposts'     => Post::orderBy('created_at', 'desc')->paginate(5),

        // Menghitung total anggaran untuk kategori 'infrastruktur' dengan format angka yang diformat
        $totalInfrastruktur = number_format(Post::where('category_id', 1)->sum('anggaran'), 2, ',', '.'),
        'totalanggaraninfrastruktur' => $totalInfrastruktur,

        $totalPendidikan = number_format(Post::where('category_id', 2)->sum('anggaran'), 2, ',', '.'),
        'totalanggaranpendidikan' => $totalPendidikan,

        $totalKesehatan = number_format(Post::where('category_id', 3)->sum('anggaran'), 2, ',', '.'),
        'totalanggarankesehatan' => $totalKesehatan,

        $totalMakanan = number_format(Post::where('category_id', 4)->sum('anggaran'), 2, ',', '.'),
        'totalanggaranmakanan' => $totalMakanan,
        
    ]);
})->middleware('auth');


// -----------------------------------------------------------
// BACKEND ADMIN BERANDA FRONTENT WEB 
// Route::get('/backendberanda', [Fe_DashboardwebadminController::class, 'index']);
// Route::get('/backendberanda/edit/{dataadminberanda}', [Fe_DashboardwebController::class, 'edit']);


// ---------------- ---------------- ---------------- ---------------- ---------------- ----------------
// ROUTE UNTUK PANGAMBILAN DATA USERS ALL DATA
Route::resource('/users', UsersController::class)->middleware('auth'); 

// ---------------- ---------------- ---------------- ---------------- ---------------- ----------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/datapenanggungjawab/data', DatapenanggungjawabController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/datapengawaslapangan/data', DatapengawaslapanganController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/karyawan/data', KaryawanController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/bussinessintelligent', BussinessIntelligentController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/runningproject', RunningProjectController::class)->middleware('auth');


// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/laporankeuangan', LaporanKeuanganController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/email', EmailController::class)->middleware('auth');


// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/berita', BeritaController::class)->middleware('auth');


// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/usersproject', UsersProjectController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/sponsor', SponsorController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/surat', SuratController::class)->middleware('auth');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/admindashboard', AdminDashboardController::class)->middleware('auth');

// routes/web.php
Route::resource('/datausers', DatausersandroidController::class)->middleware('auth');

// ---------------- ---------------- ---------------- ---------------- ---------------- ----------------
// ROUTE UNTUK PANGAMBILAN DATA PROJECT
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// Route::resource('/dashboard/posts/sub_infrastruktur', DashboardPostController::class,'sub_infrastruktur')->middleware('auth');
Route::get('/sub/sub-infrastruktur', [SubController::class, 'sub_infrastruktur'])->middleware('auth');

// DAFTAR MITRA HAIUCARE {DATA KONTRAKTOR}
Route::resource('/backend/kontraktor', Be_DatakontraktorController::class)->middleware('auth');

// DAFTAR MITRA HAIUCARE {DATA RUMAH MAKAN}
Route::resource('/backend/rumahmakan', Be_DatarumahmakanController::class)->middleware('auth');

// DAFTAR MITRA HAIUCARE {DATA RUMAH SAKIT}
Route::resource('/backend/rumahsakit', Be_DatarumahsakitController::class)->middleware('auth');

// DAFTAR MITRA HAIUCARE {DATA INSTANSI PENDIDIKAN}
Route::resource('/backend/instansipendidikan', Be_DatainstansipendidikanController::class)->middleware('auth');

// DAFTAR MITRA HAIUCARE {DATA INSTANSI PENDIDIKAN}
Route::resource('/error', ErrorController::class);











// =======================================================================
// Route::get('/', function () {
//     return view('Home', [
//         "title" => "Beranda",
//         "active" => 'beranda',
//     ]);
// });

// ========================================================================
// Route::get('/about', function () {
//     return view('about', [
//         "title"     => "Tentang",
//         "nama"      => "Sigit Septiadi Prase
//         tyo",
//         "email"     => "Sigit@gmail.com",
//         "image"     => "istriku.jpg ",
//         "active" => 'tentang'
//     ]);
// });

// ========================================================================


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blogproject', [PostController::class, 'blogproject']);
Route::delete('/blog/{slug}', [PostController::class, 'destroy']);


// Route::get('/blog', function () {

//     // return view('post', [
    //     "title"    => "Blog",
//     //     "post"     => Post::all()
//     // ]);
// });

// ========================================================================
//HALAMAN SINGLE POST 

// Route::get('posts/{post:slug}', [PostController::class, 'show']);

//{
// $blog_post = [
//     [
//         "title" => "Artikel Judul Pertama",
//         "slug" => "artikel-judul-pertama",
//         "author"   => "Sigit Septiadi",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
//     [
//         "title" => "Artikel Judul Kedua",
//         "slug" => "artikel-judul-kedua",
//         "author"   => "Iqlima Nur Izzati",
//         "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
//     ],
// ];

// $new_post = [];
// foreach ($blog_post as $post) {
//     if ($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }


// return view('posts', [
//     "title" => "Single Post",
//     "post" => Post::find($slug)

//         // ]);
//     }
// // );


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post Category By $category->nama_kategori",
        "active" => 'categories',
        'post' => $category->posts,
        'category' => $category->nama_kategori
    ]);
});


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('authordetails', [
//         'title' => "Author By : $author->name",
//         "active" => 'posts',
//         // N+1 Problem Menggunakan lazy Eiger Loading 
//         'posts' => $author->posts->load('category', 'user')

//     ]);
// });
