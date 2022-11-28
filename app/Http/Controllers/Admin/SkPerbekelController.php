<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SKPerbekel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SkPerbekelController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'datatable') {
            $data = SKPerbekel::orderBy('created_at', 'desc');
            return datatables()->of($data)
                ->editColumn('date', function ($data) {
                    return date('d M Y', strtotime($data->date));
                })
                ->addColumn('action', function ($data) {
                    $action = '';

                    // $action .= '<a href="' . route('region-apparature.show', $data->id) . '" class="me-3 text-warning" data-bs-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-file-document font-size-18"></i></a>';

                    $action .= '<a href="' . route('sk-perbekel.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="sk-perbekel/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        } else {
            return view('admin.sk-perbekel.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sk-perbekel.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required',
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'description' => 'deskripsi',
            'file' => 'files',
        ]);

        try {
            if (!empty($request->file('file'))) {
                $file = $request->file('file');

                $file = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('file')->storeAs('public/upload/rules/', $file);
            }
            SKPerbekel::create([
                'title' => $request->title,
                'description' => $request->description,
                'date' => Carbon::now(),
                'file' => isset($file) ? $file : null,
            ]);

            return redirect()->route('sk-perbekel.index')
                ->with('success', 'SK Perbekel berhasil dibuat');
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
        $data = SKPerbekel::find($id);
        if ($data == null) {
            abort(404);
        }

        return view('admin.sk-perbekel.form', [
            'data' => $data,
        ]);
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
        $oldFiles = SKPerbekel::where('id', $id)->orderBy('created_at', 'desc')->first();

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'description' => 'deskripsi'
        ]);

        try {
            if ($request->file('file')) {
                $file = $request->file('file');

                $file = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('file')->storeAs('public/upload/rules/', $file);
            } else {
                $file = $oldFiles ? $oldFiles->file : '-';
            }
            $formData = ([
                'title' => $request->title,
                'description' => $request->description,
                'file' => isset($file) ? $file : null,
            ]);

            SKPerbekel::find($id)->update($formData);

            return redirect()->route('sk-perbekel.index')
                ->with('success', 'SK Perbekel berhasil diubah');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SKPerbekel::destroy($id);
        return response()->json([
            "message" => "SK Perbekel berhasil dihapus."
        ]);
    }
}
