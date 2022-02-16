<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TerlambatController;
use App\Http\Controllers\CutiController;

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

// Route::get('send-mail', function () {
//     $details = [
//         'title' => 'Mail from Sophismata',
//         'body' => 'Terima kasih sudah menggunakan aplikasi e-Absensi'
//     ];

//     \Mail::to('sgibdd1@gmail.com')->send(new \App\Mail\MyMail($details));

//     dd("Success sent email");
// });

Route::get('/absensi', [App\Http\Controllers\absenController::class, 'index'])->name('users.absensi');
    Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('users.location');

Route::get('/lihat-absen', [App\Http\Controllers\lihatAbsensiController::class, 'index'])->name('users.lihat');

Route::get('/berita', [App\Http\Controllers\beritaController::class, 'index'])->name('users.berita');

Route::resource('pengajuan', PengajuanController::class);
Route::resource('terlambat', TerlambatController::class);
Route::resource('cuti', CutiController::class);

Route::get('/dokumentasi', [App\Http\Controllers\docsController::class, 'index'])->name('users.docs');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
