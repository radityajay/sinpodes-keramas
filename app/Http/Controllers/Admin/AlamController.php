<?php

namespace App\Http\Controllers\Admin;

use App\Alam;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'datatable') {
            $data = Alam::orderBy('created_at', 'desc');
            return datatables()->of($data)
                ->editColumn('date', function ($data) {
                    return date('d M Y', strtotime($data->date));
                })
                ->addColumn('action', function ($data) {
                    $action = '';

                    // $action .= '<a href="' . route('village-apparature.show', $data->id) . '" class="me-3 text-warning" data-bs-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-file-document font-size-18"></i></a>';

                    $action .= '<a href="' . route('alam.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    // $action .= '<a href="' . route('alam.show', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Show"><i class="mdi mdi-eye font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="alam/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return view('admin.alam.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alam.form');
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'name' => 'nama',
            'description' => 'deskripsi',
            'photo' => 'foto',
        ]);

        try {
            if (!empty($request->file('photo'))) {
                $file = $request->file('photo');

                $photo = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/upload/alam/', $photo);
            }
            Alam::create([
                'name' => $request->name,
                'description' => $request->description,
                'date' => Carbon::now(),
                'photo' => isset($photo) ? $photo : null,
            ]);

            return redirect()->route('alam.index')
                ->with('success', 'Alam berhasil dibuat');
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
        $data = Alam::find($id);
        if ($data == null) {
            abort(404);
        }

        return view('admin.alam.form', [
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
        $oldPhoto = Alam::where('id', $id)->orderBy('created_at', 'desc')->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'name' => 'nama',
            'description' => 'deskripsi'
        ]);

        try {
            if ($request->file('photo')) {
                $file = $request->file('photo');

                $photo = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/upload/alam/', $photo);
            } else {
                $photo = $oldPhoto ? $oldPhoto->photo : '-';
            }
            $formData = ([
                'name' => $request->name,
                'description' => $request->description,
                'photo' => isset($photo) ? $photo : null,
            ]);

            Alam::find($id)->update($formData);

            return redirect()->route('alam.index')
                ->with('success', 'Alam berhasil diubah');
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
        Alam::destroy($id);
        return response()->json([
            "message" => "Alam berhasil dihapus."
        ]);
    }
}
