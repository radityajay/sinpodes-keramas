<?php

// Route::get('login', function () {
//     return view('admin/auth/login');
// })->name('login');
Route::get('login', 'Admin\LoginController@index')->name('admin.login');
Route::post('/login', 'Admin\LoginController@login')->name('admin.loginsend');
Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('profile', 'Admin\ProfileController');
    Route::resource('village-apparature', 'Admin\PerangkatDesaController');
    Route::resource('pkk-apparature', 'Admin\PkkController');
    Route::resource('linmas-apparature', 'Admin\LinmasController');
    Route::resource('kt-apparature', 'Admin\KarangTarunaController');
    Route::any('announcement/{id}/accepted', 'Admin\AnnouncementController@accepted')->name('announcement.accepted');
    Route::any('announcement/{id}/reject', 'Admin\AnnouncementController@reject')->name('announcement.reject');
    Route::resource('announcement', 'Admin\AnnouncementController');
    Route::any('news/{id}/accepted', 'Admin\NewsController@accepted')->name('news.accepted');
    Route::any('news/{id}/reject', 'Admin\NewsController@reject')->name('news.reject');
    Route::resource('news', 'Admin\NewsController');
    Route::resource('village-rules', 'Admin\VillageRuleController');
    Route::resource('region-rules', 'Admin\RegionRuleController');
    Route::resource('user','Admin\RoleUserController');
    Route::resource('role','Admin\RoleController');
    Route::resource('pariwisata','Admin\PariwisataController');
    Route::resource('alam','Admin\AlamController');
    Route::resource('senbud','Admin\SenbudController');
    Route::resource('kuliner','Admin\KulinerController');
    Route::resource('perkebunan','Admin\PerkebunanController');
    Route::resource('perikanan','Admin\PerikananController');
    Route::resource('kerajinan','Admin\KerajinanController');
    Route::resource('usaha-mikro','Admin\UsahaMikroController');
    Route::resource('pengaduan-masyarakat','Admin\PengaduanMasyarakatController');
});
