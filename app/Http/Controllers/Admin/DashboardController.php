<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('admin.dashboard.index', [
            'datenow' => $data_datenow,
            'datethirty' => $data_datethirty
        ]);
    }
}
