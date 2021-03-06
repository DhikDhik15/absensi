<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TerlambatController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\PulangController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\BeritaController;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('users.location');

/*List Absen*/
Route::resource('lihat-absen', AbsenController::class); 

/*Berita*/ 
// Route::controller(BeritaController::class)->group(function (){
//     Route::get('berita', function(){
//         dd("hello world!");
//     });
// });

Route::resource('add-berita', BeritaController::class);

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('administrator/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
/*admin*/
Route::get('/administrator/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/administrator/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/administrator/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
/*pengajuan*/ 
Route::resource('pengajuan', PengajuanController::class);
Route::resource('terlambat', TerlambatController::class);
Route::resource('cuti', CutiController::class);
/*absensi*/ 
Route::resource('absensi', MasukController::class);
Route::resource('pulang', PulangController::class);

Route::get('/dokumentasi', [App\Http\Controllers\docsController::class, 'index'])->name('users.docs');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
