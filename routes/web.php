<?php

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


Route::resource('/', 'Web\HomeController');
Route::resource('profildesa', 'Web\ProfilController');
Route::resource('linmas', 'Web\LinmasController');
Route::resource('pkk', 'Web\PkkController');
Route::resource('karangtaruna', 'Web\KtController');
Route::resource('perangkatdesa', 'Web\PeradesController');
Route::resource('announ', 'Web\AnnouncementController');
Route::resource('berita', 'Web\BeritaController');
Route::resource('aturandesa', 'Web\AturandesaController');
Route::resource('aturankabupaten', 'Web\AturankabController');
Route::resource('potensialam', 'Web\AlamController');
Route::resource('potensipariwisata', 'Web\PariwisataController');
Route::resource('potensisenbud', 'Web\SenbudController');
Route::resource('potensikuliner', 'Web\KulinerController');
Route::resource('potensiperkebunan', 'Web\PerkebunanController');
Route::resource('potensiperikanan', 'Web\PerikananController');
Route::resource('potensikerajinan', 'Web\KerajinanController');
Route::resource('potensiusahamikro', 'Web\UsahamikroController');
Route::resource('pengaduan', 'Web\PengaduanController');
