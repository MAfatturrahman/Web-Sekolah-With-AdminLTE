<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Start Backend Controller
// Data
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;

//Pengguna
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuditController;
// End Backend Controller

// Start Frondend Controller
use App\Http\Controllers\HompagesController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PrestasiUController;
use App\Http\Controllers\PelajaranUController;
use App\Http\Controllers\GaleriUController;
use App\Http\Controllers\BeritaUController;
use App\Http\Controllers\EkstrakurikulerController;
// End Frondend Controller


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
    //Profile
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::resource('/profil', ProfilController::class);
    //-------------------------------------------------------------------------------------------------------------------------------

    //Guru
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index')->middleware('can:view-guru');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create')->middleware('can:create-guru');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit')->middleware('can:edit-guru');
    Route::get('/guru/{id}', [GuruController::class, 'show'])->name('guru.show')->middleware('can:show-guru');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy')->middleware('can:delete-guru');
    Route::post('/guru', [GuruController::class, 'store'])->name('guru.store')->middleware('can:create-guru');
    Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update')->middleware('can:edit-guru');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Petugas
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index')->middleware('can:view-petugas');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create')->middleware('can:create-petugas');
    Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware('can:edit-petugas');
    Route::get('/petugas/{id}', [PetugasController::class, 'show'])->name('petugas.show')->middleware('can:show-petugas');
    Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy')->middleware('can:delete-petugas');
    Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store')->middleware('can:create-petugas');
    Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update')->middleware('can:edit-petugas');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Murid
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/murid', [MuridController::class, 'index'])->name('murid.index')->middleware('can:view-murid');
    Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create')->middleware('can:create-murid');
    Route::get('/murid/{id}/edit', [MuridController::class, 'edit'])->name('murid.edit')->middleware('can:edit-murid');
    Route::get('/murid/{id}', [MuridController::class, 'show'])->name('murid.show')->middleware('can:show-murid');
    Route::delete('/murid/{id}', [MuridController::class, 'destroy'])->name('murid.destroy')->middleware('can:delete-murid');
    Route::post('/murid', [MuridController::class, 'store'])->name('murid.store')->middleware('can:create-murid');
    Route::put('/murid/{id}', [MuridController::class, 'update'])->name('murid.update')->middleware('can:edit-murid');
    //-------------------------------------------------------------------------------------------------------------------------------

    //SPP
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/spp', [SppController::class, 'index'])->name('spp.index')->middleware('can:view-spp');
    Route::get('/spp/create', [SppController::class, 'create'])->name('spp.create')->middleware('can:create-spp');
    Route::get('/spp/{id}/edit', [SppController::class, 'edit'])->name('spp.edit')->middleware('can:edit-spp');
    Route::get('/spp/{id}', [SppController::class, 'show'])->name('spp.show')->middleware('can:show-spp');
    Route::delete('/spp/{id}', [SppController::class, 'destroy'])->name('spp.destroy')->middleware('can:delete-spp');
    Route::post('/spp', [SppController::class, 'store'])->name('spp.store')->middleware('can:create-spp');
    Route::put('/spp/{id}', [SppController::class, 'update'])->name('spp.update')->middleware('can:edit-spp');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Prestasi
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index')->middleware('can:view-prestasi');
    Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create')->middleware('can:create-prestasi');
    Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit')->middleware('can:edit-prestasi');
    Route::get('/prestasi/{id}', [PrestasiController::class, 'show'])->name('prestasi.show')->middleware('can:show-prestasi');
    Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy')->middleware('can:delete-prestasi');
    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store')->middleware('can:create-prestasi');
    Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('prestasi.update')->middleware('can:edit-prestasi');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Pelajaran
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/pelajaran', [PelajaranController::class, 'index'])->name('pelajaran.index')->middleware('can:view-pelajaran');
    Route::get('/pelajaran/create', [PelajaranController::class, 'create'])->name('pelajaran.create')->middleware('can:create-pelajaran');
    Route::get('/pelajaran/{id}/edit', [PelajaranController::class, 'edit'])->name('pelajaran.edit')->middleware('can:edit-pelajaran');
    Route::get('/pelajaran/{id}', [PelajaranController::class, 'show'])->name('pelajaran.show')->middleware('can:show-pelajaran');
    Route::delete('/pelajaran/{id}', [PelajaranController::class, 'destroy'])->name('pelajaran.destroy')->middleware('can:delete-pelajaran');
    Route::post('/pelajaran', [PelajaranController::class, 'store'])->name('pelajaran.store')->middleware('can:create-pelajaran');
    Route::put('/pelajaran/{id}', [PelajaranController::class, 'update'])->name('pelajaran.update')->middleware('can:edit-pelajaran');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Galeri
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index')->middleware('can:view-galeri');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create')->middleware('can:create-galeri');
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit')->middleware('can:edit-galeri');
    Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('galeri.show')->middleware('can:show-galeri');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy')->middleware('can:delete-galeri');
    Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store')->middleware('can:create-galeri');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update')->middleware('can:edit-galeri');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Berita
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index')->middleware('can:view-berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('can:create-berita');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('can:edit-berita');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show')->middleware('can:show-berita');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('can:delete-berita');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store')->middleware('can:create-berita');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('can:edit-berita');
    //-------------------------------------------------------------------------------------------------------------------------------

    //User Manegement
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/userManagement', [PenggunaController::class, 'index'])->name('userManagement.index')->middleware('can:view-user-management');
    Route::get('/userManagement/create', [PenggunaController::class, 'create'])->name('userManagement.create')->middleware('can:create-user-management');
    Route::get('/userManagement/{id}/edit', [PenggunaController::class, 'edit'])->name('userManagement.edit')->middleware('can:edit-user-management');
    Route::get('/userManagement/{id}', [PenggunaController::class, 'show'])->name('userManagement.show')->middleware('can:show-user-management');
    Route::delete('/userManagement/{id}', [PenggunaController::class, 'destroy'])->name('userManagement.destroy')->middleware('can:delete-user-management');
    Route::post('/userManagement', [PenggunaController::class, 'store'])->name('userManagement.store')->middleware('can:create-user-management');
    Route::put('/userManagement/{id}', [PenggunaController::class, 'update'])->name('userManagement.update')->middleware('can:edit-user-management');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Role Manegement
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware('can:view-roles');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create')->middleware('can:create-roles');
    Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:edit-roles');
    Route::get('/role/{id}', [RoleController::class, 'show'])->name('role.show')->middleware('can:show-roles');
    Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy')->middleware('can:delete-roles');
    Route::post('/role', [RoleController::class, 'store'])->name('role.store')->middleware('can:create-roles');
    Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update')->middleware('can:edit-roles');
    //-------------------------------------------------------------------------------------------------------------------------------

    //Audit
    //-------------------------------------------------------------------------------------------------------------------------------
    Route::get('/audit', [AuditController::class, 'index'])->name('audit.index')->middleware('can:view-audit');
    Route::get('/audit/{id}', [AuditController::class, 'show'])->name('audit.show')->middleware('can:show-audit');
    //-------------------------------------------------------------------------------------------------------------------------------
});

//Untuk Halaman Pages
//-------------------------------------------------------------------------------------------------------------------------------
Route::get('/Homepages', [HompagesController::class, 'index'])->name('homepages');
Route::get('/Fasilitas', [FasilitasController::class, 'fasilitas'])->name('user.fasilitas');
Route::get('/Jurusan', [JurusanController::class, 'jurusan'])->name('user.jurusan');
Route::get('/Prestasi', [PrestasiUController::class, 'prestasi'])->name('user.prestasi');
Route::get('/Pelajaran', [PelajaranUController::class, 'pelajaran'])->name('user.pelajaran');
Route::get('/Galeri', [GaleriUController::class, 'index'])->name('user.galeri');
Route::get('/Berita', [BeritaUController::class, 'berita'])->name('user.berita');
Route::get('/Ekstrakurikuler', [EkstrakurikulerController::class, 'Ekstrakurikuler'])->name('user.Ekstrakurikuler');
//-------------------------------------------------------------------------------------------------------------------------------
