<?php

use App\Http\Controllers\AboutDashboardController;
use App\Models\Post;
use App\Models\About;
use App\Models\Event;
use App\Models\Pilar;
use App\Models\Tentang;
use App\Models\Category;
use App\Models\Education;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PillarController;
use App\Http\Controllers\AllPostController;
use App\Http\Controllers\AcademikController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardGaleryController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\DashboardBelajarController;
use App\Http\Controllers\DashboardBismillahController;
use App\Http\Controllers\DashboardCllassController;
use App\Http\Controllers\DashboardContacController;
use App\Http\Controllers\DashboardEskulController;
use App\Http\Controllers\DashboardFilosofiController;
use App\Http\Controllers\DashboardFounderController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\DashboardSideController;
use App\Http\Controllers\PesanController;
use App\Models\Belajar;
use App\Models\Contac;
use App\Models\Eskul;
use App\Models\Filosofi;
use App\Models\Founder;
use App\Models\Galery;
use App\Models\Guru;
use App\Models\Side;
use App\Models\Program;
use App\Models\Cllass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', [EducationController::class, 'index'])->middleware('guest');
// Route::get('/', function () {
//     return view('Home', [
//         "title" => "Home",
//         'active' => 'home',
//         'educ' => Education::all(),
//         'categ' => Category::all(),
//         'event' => Event::all()
//     ]);
// });
// Route::resource('/dashboard/akademi', AcademikController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/event', DashboardEventController::class)->middleware('auth');

//paud ananda
Route::get('/', function () {
    return view('paud.index', [
        'side' => Side::all(),
        'about' => About::all(),
        'pilar' => Pilar::all(),
        'fasilitas' => Belajar::all(),
        'eskul' => Eskul::all(),
        'contac' => Contac::all(),
        'program' => Program::all(),
        'cllass' => Cllass::with('programs')->get()
    ]);
});
Route::get('/paud', function () {
    return view('paud.index', [
        'side' => Side::all(),
        'about' => About::all(),
        'pilar' => Pilar::all(),
        'fasilitas' => Belajar::all(),
        'eskul' => Eskul::all(),
        'contac' => Contac::all(),
        'program' => Program::all(),
        'cllass' => Cllass::with('programs')->get()
    ]);
});
Route::get('/galery', function () {
    return view('paud.galery', [
        'side' => Side::all(),
        'galery' => Galery::all(),
        'contac' => Contac::all()
    ]);
});
Route::get('/event', function () {
    return view('paud.event', [
        "blog" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(6)->withQueryString(),
        'contac' => Contac::all()
    ]);
});
Route::get('/paud/news/{post:slug}', function (Post $post) {
    return view('paud/news', [
        'blog' => $post,
        "post" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(6)->withQueryString(),
        'contac' => Contac::all()
    ]);
});
Route::get('/contact', function () {
    return view('paud.contact', [
        'contac' => Contac::all()
    ]);
});
Route::get('/Founder', function () {
    return view('paud.Founder', [
        'founder' => Founder::all(),
        'contac' => Contac::all()
    ]);
});
Route::get('/Filosofi', function () {
    return view('paud.Filosofi', [
        'filosofi' => Filosofi::all(),
        'contac' => Contac::all()
    ]);
});
Route::get('/Guru', function () {
    return view('paud.Guru', [
        'guru' => Guru::all(),
        'contac' => Contac::all()
    ]);
});


// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         'active' => 'about',
//         "name" => "Hisyam",
//         "email" => "hisyam@gmail.com",
//         "gambar" => "aku.jpg"
//     ]);
// });

// Route::get('/page', [PostController::class, 'index']);
//halaman single post
// Route::get('/page/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function () {
//     return view('categories', [
//         'title' => 'Post categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('/dashboard.index', [
        'side' => Side::all(),
    ]);
})->middleware('auth');

Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('admin');
Route::resource('/dashboard/allposts', AllPostController::class)->middleware('admin');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/pilar', PillarController::class)->middleware('admin');
Route::resource('/dashboard/galery', DashboardGaleryController::class)->middleware('auth');
Route::resource('/dashboard/belajar', DashboardBelajarController::class)->middleware('admin');
Route::resource('/dashboard/about', AboutDashboardController::class)->middleware('admin');
// Route::resource('/dashboard/kelas', DashboardKelasController::class)->middleware('admin');
// Route::resource('/dashboard/bismillah', DashboardBismillahController::class)->middleware('admin');
Route::resource('/dashboard/cllass', DashboardCllassController::class)->middleware('admin');
Route::resource('/dashboard/program', DashboardProgramController::class)->middleware('admin');
Route::resource('/dashboard/side', DashboardSideController::class)->middleware('admin');
Route::resource('/dashboard/eskul', DashboardEskulController::class)->middleware('admin');
Route::resource('/dashboard/founder', DashboardFounderController::class)->middleware('admin');
Route::resource('/dashboard/filosofi', DashboardFilosofiController::class)->middleware('admin');
Route::resource('/dashboard/guru', DashboardGuruController::class)->middleware('admin');
Route::resource('/dashboard/contac', DashboardContacController::class)->middleware('admin');
Route::resource('/paud/contact', PesanController::class);
