<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\VillageRule;
use Illuminate\Http\Request;

class AturandesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VillageRule::orderBy('created_at','asc')->get();
        // dd($data);
        return view('web.aturandesa', [
            'data' => $data
        ]);
    }

    public function filter(Request $request){
        // dd($request->all());
        $data = VillageRule::when(($request->start_date != null && $request->start_date != '')
        && ($request->end_date != null && $request->end_date != ''), function ($query) use($request) {
        $start_date = $request->start_date != null && $request->start_date != '' ? date('Y-m-d', strtotime($request->start_date)) : null;
        $end_date = $request->end_date != null && $request->end_date != '' ? date('Y-m-d', strtotime($request->end_date)) : null;

        return $query->whereBetween('date', [$start_date, $end_date]);
        })->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
