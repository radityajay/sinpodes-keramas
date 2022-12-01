<?php

namespace App\Http\Controllers\Web;

use App\Announcement;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = News::with(['images'])->whereHas('images', function ($query) {
            $query->where('set_front', 1);
        })->where('status', 'ACCEPTED')->limit(4)->get();

        $pengumuman = Announcement::where('status', 'ACCEPTED')->limit(4)->get();
        // $fotoberita = NewsImage::where('new_id', $berita->id)->get();
        // dd($berita);
        return view('web.home',[
            'berita' => $berita,
            'pengumuman' => $pengumuman,
            // 'fotoberita' => $fotoberita
        ]);
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
