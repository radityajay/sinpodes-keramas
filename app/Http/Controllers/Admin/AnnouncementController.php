<?php

namespace App\Http\Controllers\Admin;

use App\Announcement;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'datatable') {
            $data = Announcement::orderBy('created_at', 'desc');
            return datatables()->of($data)
                ->editColumn('date', function ($data) {
                    return date('d M Y', strtotime($data->date));
                })
                ->addColumn('status', function ($data) {
                    $status = '';
                    if($data->is_active != false){
                        $status = '<div> <span style="padding:5px;border-radius:10px;background-color: #027e06;color: #fff;border: 2px solid #027e06;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);" class="badge status-success">Aktif</span> </div>';
                    }else{
                        $status = '<div> <span style="padding:5px;border-radius:10px;background-color: #ff3d60;color: #fff;border: 2px solid #ff3d60;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);" class="badge status-danger">Tidak Aktif</span> </div>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($data) {
                    $action = '';

                    // $action .= '<a href="' . route('village-apparature.show', $data->id) . '" class="me-3 text-warning" data-bs-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-file-document font-size-18"></i></a>';

                    $action .= '<a href="' . route('announcement.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="announcement/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        } else {
            return view('admin.announcement.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcement.form');
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
            'is_active' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'is_active' => 'pilih salah satu',
            'description' => 'deskripsi',
            'photo' => 'foto',
        ]);

        try {
            if (!empty($request->file('photo'))) {
                $file = $request->file('photo');

                $photo = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/upload/announcement/', $photo);
            }
            Announcement::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'is_active' => $request->is_active == 1 ? true : false,
                'date' => Carbon::now(),
                'photo' => isset($photo) ? $photo : null,
            ]);

            return redirect()->route('announcement.index')
                ->with('success', 'Pengumuman berhasil dibuat');
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
        $data = Announcement::find($id);
        if ($data == null) {
            abort(404);
        }

        return view('admin.announcement.form', [
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
        $oldPhoto = Announcement::where('id', $id)->orderBy('created_at', 'desc')->first();

        $request->validate([
            'title' => 'required',
            'is_active' => 'required',
            'description' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ], [
            'title' => 'judul',
            'is_active' => 'pilih salah satu',
            'description' => 'deskripsi'
        ]);

        try {
            if ($request->file('photo')) {
                $file = $request->file('photo');

                $photo = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/upload/announcement/', $photo);
            } else {
                $photo = $oldPhoto ? $oldPhoto->photo : '-';
            }
            $formData = ([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'description' => $request->description,
                'is_active' => $request->is_active == 1 ? true : false,
                'photo' => isset($photo) ? $photo : null,
            ]);

            Announcement::find($id)->update($formData);

            return redirect()->route('announcement.index')
                ->with('success', 'Pengumuman berhasil diubah');
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
        Announcement::destroy($id);
        return response()->json([
            "message" => "Pengumuman berhasil dihapus."
        ]);
    }
}
