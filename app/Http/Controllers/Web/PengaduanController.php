<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengaduan::orderBy('created_at','asc')->get();
        // dd($data);
        return view('web.pengaduan', [
            'data' => $data
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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'message' => 'required',
            'phone_number' => 'required|max:15',
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'first_name' => 'nama depan',
            'last_name' => 'nama belakang',
            'message' => 'pesan',
            'phone_number' => 'nomor telepon',
        ]);

        try {
            Pengaduan::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'message' => $request->message,
                'email' => $request->email,
                'date' => Carbon::now(),
            ]);

            return redirect()->route('pengaduan.index')
                ->with('success', 'Pengaduan Masyarakat berhasil di kirim!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
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
