<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CTanaman;
use App\Http\Controllers\CKategori;
use App\Http\Controllers\CProjectku;


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

Route::get('/user', function () {
    return view('projectku');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/gallery', function () {
//     return view('gallery');
// });

Route::get('/gallery', [CProjectku::class, 'gallery']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tugas', function () {
    return view('tugas');
});

// Route::get('/projectku', function () {
//     return view('projectku');
// });

Route::get('/projectku', [CProjectku::class, 'projectku']);

Route::get('/learn', function () {
    return ('belajar');
});


Route::get('/java', function () {
    return ('ini java');
});

Route::get('/golang', function () {
    return ('ini golang');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba/{nama}/{kelas}', function ($n, $k) {
    return view('coba', ['namamu'=>$n, 'kelasmu'=>$k]);
});

Route::get('/ftanaman', function () {
    return view('ftanaman');
});

Route::get('/fkategori', function () {
    return view('fkategori');
});

Route::get('tabeltanaman', [CTanaman::class, 'tampil']);
Route::get('tabeltanaman/hapus/{kd_tanaman}', [CTanaman::class, 'hapus']);

Route::get('tabeltanaman/edit/{kd_tanaman}', [CTanaman::class, 'edit']);
Route::post('tabeltanaman/update/{kd_tanaman}', [CTanaman::class, 'update']);

Route::get('tabeltanaman/tambah', [CTanaman::class, 'tambah']);
Route::post('tabeltanaman/simpan', [CTanaman::class, 'simpan']);

Route::get('tabelkategori', [CKategori ::class, 'tampil']);
Route::get('tabelkategori/hapus/{id_kategori}', [CKategori ::class, 'hapus']);

Route::get('tabelkategori/edit/{id_kategori}', [CKategori ::class, 'edit']);
Route::post('tabelkategori/update/{id_kategori}', [CKategori ::class, 'update']);

Route::get('tabelkategori/tambah', [CKategori ::class, 'tambah']);
Route::post('tabelkategori/simpan', [CKategori ::class, 'simpan']);