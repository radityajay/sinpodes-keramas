<?php

// Route::get('login', function () {
//     return view('admin/auth/login');
// })->name('login');
Route::get('login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/login', 'Admin\LoginController@login')->name('admin.loginsend');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('profile', 'Admin\ProfileController');
    Route::resource('village-apparature', 'Admin\PerangkatDesaController');
    Route::resource('pkk-apparature', 'Admin\PkkController');
    Route::resource('linmas-apparature', 'Admin\LinmasController');
    Route::resource('kt-apparature', 'Admin\KarangTarunaController');
    Route::resource('announcement', 'Admin\AnnouncementController');
    Route::resource('news', 'Admin\NewsController');
    Route::resource('village-rules', 'Admin\VillageRuleController');
    Route::resource('region-rules', 'Admin\RegionRuleController');
});
