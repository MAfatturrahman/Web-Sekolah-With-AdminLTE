<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaUController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\HompagesController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HistoryController;

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
    return view('homepages');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Untuk Halaman Admin
Route::group(['middleware' => ['auth']], function () {
    Route::resource('/profil', ProfilController::class);

    //Guru
    //-------------------------------------------------------------------------------------------------
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index')->middleware('can:view-guru');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create')->middleware('can:create-guru');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit')->middleware('can:edit-guru');
    Route::get('/guru/{id}', [GuruController::class, 'show'])->name('guru.show')->middleware('can:show-guru');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy')->middleware('can:delete-guru');
    Route::post('/guru', [GuruController::class, 'store'])->name('guru.store')->middleware('can:create-guru');
    Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update')->middleware('can:edit-guru');
    //-------------------------------------------------------------------------------------------------

    //Petugas
    //-------------------------------------------------------------------------------------------------
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index')->middleware('can:view-petugas');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create')->middleware('can:create-petugas');
    Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware('can:edit-petugas');
    Route::get('/petugas/{id}', [PetugasController::class, 'show'])->name('petugas.show')->middleware('can:show-petugas');
    Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy')->middleware('can:delete-petugas');
    Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store')->middleware('can:create-petugas');
    Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update')->middleware('can:edit-petugas');
    //-------------------------------------------------------------------------------------------------

    //Murid
    //-------------------------------------------------------------------------------------------------
    Route::get('/murid', [MuridController::class, 'index'])->name('murid.index')->middleware('can:view-murid');
    Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create')->middleware('can:create-murid');
    Route::get('/murid/{id}/edit', [MuridController::class, 'edit'])->name('murid.edit')->middleware('can:edit-murid');
    Route::get('/murid/{id}', [MuridController::class, 'show'])->name('murid.show')->middleware('can:show-murid');
    Route::delete('/murid/{id}', [MuridController::class, 'destroy'])->name('murid.destroy')->middleware('can:delete-murid');
    Route::post('/murid', [MuridController::class, 'store'])->name('murid.store')->middleware('can:create-murid');
    Route::put('/murid/{id}', [MuridController::class, 'update'])->name('murid.update')->middleware('can:edit-murid');
    //-------------------------------------------------------------------------------------------------

    //SPP
    //-------------------------------------------------------------------------------------------------
    Route::get('/spp', [SppController::class, 'index'])->name('spp.index')->middleware('can:view-spp');
    Route::get('/spp/create', [SppController::class, 'create'])->name('spp.create')->middleware('can:create-spp');
    Route::get('/spp/{id}/edit', [SppController::class, 'edit'])->name('spp.edit')->middleware('can:edit-spp');
    Route::get('/spp/{id}', [SppController::class, 'show'])->name('spp.show')->middleware('can:show-spp');
    Route::delete('/spp/{id}', [SppController::class, 'destroy'])->name('spp.destroy')->middleware('can:delete-spp');
    Route::post('/spp', [SppController::class, 'store'])->name('spp.store')->middleware('can:create-spp');
    Route::put('/spp/{id}', [SppController::class, 'update'])->name('spp.update')->middleware('can:edit-spp');
    //-------------------------------------------------------------------------------------------------

    //Berita
    //-------------------------------------------------------------------------------------------------
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index')->middleware('can:view-berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('can:create-berita');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('can:edit-berita');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show')->middleware('can:show-berita');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('can:delete-berita');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store')->middleware('can:create-berita');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('can:edit-berita');
    //-------------------------------------------------------------------------------------------------

    //User Manegement
    //-------------------------------------------------------------------------------------------------
    Route::get('/userManagement', [PenggunaController::class, 'index'])->name('userManagement.index')->middleware('can:view-user-management');
    Route::get('/userManagement/create', [PenggunaController::class, 'create'])->name('userManagement.create')->middleware('can:create-user-management');
    Route::get('/userManagement/{id}/edit', [PenggunaController::class, 'edit'])->name('userManagement.edit')->middleware('can:edit-user-management');
    Route::get('/userManagement/{id}', [PenggunaController::class, 'show'])->name('userManagement.show')->middleware('can:show-user-management');
    Route::delete('/userManagement/{id}', [PenggunaController::class, 'destroy'])->name('userManagement.destroy')->middleware('can:delete-user-management');
    Route::post('/userManagement', [PenggunaController::class, 'store'])->name('userManagement.store')->middleware('can:create-user-management');
    Route::put('/userManagement/{id}', [PenggunaController::class, 'update'])->name('userManagement.update')->middleware('can:edit-user-management');
    //-------------------------------------------------------------------------------------------------

    //Role Manegement
    //-------------------------------------------------------------------------------------------------
    Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware('can:view-roles');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create')->middleware('can:create-roles');
    Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:edit-roles');
    Route::get('/role/{id}', [RoleController::class, 'show'])->name('role.show')->middleware('can:show-roles');
    Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy')->middleware('can:delete-roles');
    Route::post('/role', [RoleController::class, 'store'])->name('role.store')->middleware('can:create-roles');
    Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update')->middleware('can:edit-roles');
    //-------------------------------------------------------------------------------------------------

    //History
    //-------------------------------------------------------------------------------------------------
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index')->middleware('can:view-history');
    Route::get('/history/{id}', [HistoryController::class, 'show'])->name('history.show')->middleware('can:show-history');
    //-------------------------------------------------------------------------------------------------
});

//Untuk Halaman Pages
//-------------------------------------------------------------------------------------------------
Route::get('/Homepages', [HompagesController::class, 'index'])->name('homepages');
Route::get('/Fasilitas', [FasilitasController::class, 'fasilitas'])->name('user.fasilitas');
Route::get('/Jurusan', [JurusanController::class, 'jurusan'])->name('user.jurusan');
Route::get('/Berita', [BeritaUController::class, 'berita'])->name('user.berita');
Route::get('/Visi', [VisiController::class, 'visi'])->name('user.visi');
Route::get('/Ekstrakurikuler', [EkstrakurikulerController::class, 'Ekstrakurikuler'])->name('user.Ekstrakurikuler');
//-------------------------------------------------------------------------------------------------
