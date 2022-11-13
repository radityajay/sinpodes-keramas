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
Route::resource('linmas', 'Web\LinmasController');
Route::resource('pkk', 'Web\PkkController');
Route::resource('karangtaruna', 'Web\KtController');
Route::resource('perangkatdesa', 'Web\PeradesController');
Route::resource('announ', 'Web\AnnouncementController');
