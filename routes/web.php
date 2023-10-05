<?php

use App\Models\Loker;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaDashboardController;
use App\Http\Controllers\GuruDashboardController;
use App\Http\Controllers\LokerDashboardController;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\berita;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home' , [
        "name" => "Fatkhan",
        "title" => "Home",
    
    ]);
});

Route::get('/agenda', function () {
    return view('Agenda' , [
        "name" => "Agenda",
        "title" => "Agenda"
    ]);
});
Route::get('/profile', function () {
    return view('profile' , [
        "title" => "Kontak",
        "name" => "Fatkhan Akbar",
        "email" => "fatkhaakbar46@gmail.com",
        "image" => "under.jpg",
        "alamat" => "Desa Salamrejo"
    ]);
});
Route::get('/kontak', function () {
    return view('Kontak' , [
        "title" => "Kontak",
        "name" => "Fatkhan Akbar",
    ]);
});



Route::get('/berita',[beritaController::class,'index']);

    Route::get('posts/{slug}', [beritaController::class, 'find']);

    // Siswa
    Route::get('/siswa', [StudentController::class, 'index']);

Route::get('/siswa/tambah', [StudentController::class,'tambah']);
Route::post('/siswa/simpan', [StudentController::class,'simpan']);
Route::post('/siswa/edit/{id}', [StudentController::class,'edit']);
Route::put('/siswa/update/{id}', [StudentController::class,'update']);
Route::get('/siswa/hapus/{id}',  [StudentController::class,'delete']);

    // Guru
    Route::get('/guru', [GuruController::class, 'index']);

    Route::get('/guru/tambah', [GuruController::class,'tambah']);
    Route::post('/guru/simpan', [GuruController::class,'simpan']);
    Route::get('/guru/hapus/{id}', [GuruController::class,'delete']);
    Route::post('/guru/edit/{id}', [GuruController::class,'edit']);
    Route::put('/guru/update/{id}', [GuruController::class,'update']);

    // info loker
    Route::get('/info_loker', [LokerController::class, 'index']);

    Route::get('/loker/tambah', [LokerController::class,'tambah']);
    Route::post('/loker/simpan', [LokerController::class,'simpan']);
    Route::post('/loker/edit/{id}', [LokerController::class,'edit']);
    Route::get('/loker/hapus/{id}', [LokerController::class,'delete']);

    // Login Register
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/logout', [LoginController::class, 'logout']);

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/dashboard/siswadashboard', [SiswaDashboardController::class, 'siswadashboard']);
    Route::get('/dashboard/gurudashboard', [GuruDashboardController::class, 'gurudashboard']);
    Route::get('/dashboard/lokerdashboard', [LokerDashboardController::class, 'lokerdashboard']);


