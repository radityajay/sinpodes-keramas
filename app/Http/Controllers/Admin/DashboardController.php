<?php

namespace App\Http\Controllers\Admin;

use App\Alam;
use App\Announcement;
use App\Http\Controllers\Controller;
use App\KarangTaruna;
use App\Kerajinan;
use App\Kuliner;
use App\Linmas;
use App\News;
use App\Pariwisata;
use App\PerangkatDesa;
use App\Perikanan;
use App\Perkebunan;
use App\Pkk;
use App\RegionRule;
use App\Role;
use App\RoleUser;
use App\Senbud;
use App\UsahaMikro;
use App\VillageRule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datenow = Carbon::now();
        $data_datenow = $datenow->format('Y-m-d');
        $data_datethirty = $datenow->addDays(30)->format('Y-m-d');

        $countPerangkatDesa = PerangkatDesa::whereNull('deleted_at')->count();
        $countPkk = Pkk::whereNull('deleted_at')->count();
        $countLinmas = Linmas::whereNull('deleted_at')->count();
        $countKt = KarangTaruna::whereNull('deleted_at')->count();
        $countUsers = RoleUser::where('is_active', true)->count();
        $countRoles = Role::all()->count();
        $countUsahaMikro = UsahaMikro::whereNull('deleted_at')->count();
        $countKerajinan = Kerajinan::whereNull('deleted_at')->count();
        $countPerikanan = Perikanan::whereNull('deleted_at')->count();
        $countPerkebunan = Perkebunan::whereNull('deleted_at')->count();
        $countKuliner = Kuliner::whereNull('deleted_at')->count();
        $countSenbud = Senbud::whereNull('deleted_at')->count();
        $countAlam = Alam::whereNull('deleted_at')->count();
        $countPariwisata = Pariwisata::whereNull('deleted_at')->count();
        $countPeraturanKabupaten = RegionRule::whereNull('deleted_at')->count();
        $countPeraturanDesa = VillageRule::whereNull('deleted_at')->count();
        $countBerita = News::whereNull('deleted_at')->count();
        $countPengumuman = Announcement::whereNull('deleted_at')->count();

        return view('admin.dashboard.index', [
            'datenow' => $data_datenow,
            'datethirty' => $data_datethirty,
            'countPerangkatDesa' => $countPerangkatDesa,
            'countPkk' => $countPkk,
            'countLinmas' => $countLinmas,
            'countKt' => $countKt,
            'countPengumuman' => $countPengumuman,
            'countBerita' => $countBerita,
            'countPeraturanDesa' => $countPeraturanDesa,
            'countPeraturanKabupaten' => $countPeraturanKabupaten,
            'countPariwisata' => $countPariwisata,
            'countAlam' => $countAlam,
            'countSenbud' => $countSenbud,
            'countKuliner' => $countKuliner,
            'countPerkebunan' => $countPerkebunan,
            'countPerikanan' => $countPerikanan,
            'countKerajinan' => $countKerajinan,
            'countUsahaMikro' => $countUsahaMikro,
            'countRoles' => $countRoles,
            'countUsers' => $countUsers,
        ]);
    }
}
