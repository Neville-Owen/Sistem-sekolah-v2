<?php

use App\http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Manajement Data Siswa
Route::name('students.')->prefix('/students')->group(function () {

  // Halaman Daftar Siswa
Route::get('', function () {
    return "ini halaman daftar siswa";
})->name('index');

// Halaman Detail Siswa
Route::get('/{id}', function ($id) {
    return "ini halaman detail siswa dengan id: {$id}";
})->name('show');

// Halaman Tambah Siswa
Route::get('/create', function () {
    return "ini halaman tambah siswa";
})->name('create');

// Halaman Edit Siswa
Route::get('/{id}/edit', function ($id) {
    return "ini halaman edit siswa dengan id: {$id}";
})->name('edit');

// Logika Tambah Siswa
Route::post('', function () {
    return "Menambahkan siswa baru";
})->name('store');

//Logika Edit Siswa
Route::put('/{id}', function ($id) {
    return "Mengedit siswa dengan id: {$id}";
})->name('update');

//Logika Hapus Siswa
Route::delete('/{id}', function ($id) {
    return "Menghapus siswa dengan id: {$id}";
})->name('destroy'); 

});

