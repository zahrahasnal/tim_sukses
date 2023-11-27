<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('showformlogin');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', function () { return view('login'); });
Route::get('website', [WebsiteController::class, 'index'])->name('website');
Route::get('create-website', [WebsiteController::class, 'create'])->name('create-website');
Route::post('save-website', [WebsiteController::class, 'store'])->name('save-website');
Route::get('edit-website/{id}', [WebsiteController::class, 'edit'])->name('edit-website');
Route::put('update-website/{id}', [WebsiteController::class, 'update'])->name('update-website');
Route::get('delete-website/{id}', [WebsiteController::class, 'destroy'])->name('delete-website');
Route::get('search-website', [WebsiteController::class, 'search'])->name('search-website');

Route::get('manage-website/pendidikan/view', [WebsiteController::class, 'pendidikan'])->name('pendidikan');
Route::get('manage-website/infrastruktur/view', [WebsiteController::class, 'infrastruktur'])->name('infrastruktur');
Route::get('manage-website/pemerintahan/view', [WebsiteController::class, 'pemerintahan'])->name('pemerintahan');
Route::get('manage-website/layanan-publik/view', [WebsiteController::class, 'layananPublik'])->name('layanan-publik');
Route::get('manage-website/integrasi-sistem/view', [WebsiteController::class, 'integrasiSistem'])->name('integrasi-sistem');
Route::get('manage-website/web-opd/view', [WebsiteController::class, 'webOPD'])->name('web-opd');
Route::get('manage-website/web-kecamatan/view', [WebsiteController::class, 'webKecamatan'])->name('web-kecamatan');
Route::get('manage-website/web-kelurahan/view', [WebsiteController::class, 'webKelurahan'])->name('web-kelurahan');
Route::get('manage-website/web-smp/view', [WebsiteController::class, 'smp'])->name('web-smp');
Route::get('manage-website/web-sd/view', [WebsiteController::class, 'sd'])->name('web-sd');

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/laporan/view_file/{filename}', [LaporanController::class, 'viewFile'])->name('view-file');
Route::get('/search-laporan', [LaporanController::class, 'searchLaporan'])->name('search-laporan');

Route::get('/download/{category}', [DownloadController::class, 'downloadCategoryPDF'])->name('download.category');
Route::get('/download', [DownloadController::class, 'downloadAll'])->name('download.all');

Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('create-users', [UserController::class, 'create'])->name('create-users');
Route::post('save-users', [UserController::class, 'store'])->name('save-users');
Route::get('edit-users/{id}', [UserController::class, 'edit'])->name('edit-users');
Route::put('update-users/{id}', [UserController::class, 'update'])->name('update-users');
Route::get('delete-users/{id}', [UserController::class, 'destroy'])->name('delete-users');
Route::get('search-users', [UserController::class, 'search'])->name('search-users');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
