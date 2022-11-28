<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pengaduan;
use Illuminate\Http\Request;

class PengaduanMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->type == 'datatable') {
            $data = Pengaduan::orderBy('created_at', 'desc');
            return datatables()->of($data)
                ->editColumn('date', function ($data) {
                    return date('d M Y', strtotime($data->date));
                })
                ->addColumn('fullname', function($data) {
                    return $data->first_name + ' ' + $data->last_name;
                })
                ->addColumn('action', function ($data) {
                    $action = '';

                    // $action .= '<a href="' . route('village-apparature.show', $data->id) . '" class="me-3 text-warning" data-bs-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-file-document font-size-18"></i></a>';

                    // $action .= '<a href="' . route('pengaduan-masyarakat.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    $action .= '<a href="' . route('pengaduan-masyarakat.show', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Show"><i class="mdi mdi-eye font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="pengaduan-masyarakat/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action', 'fullname'])
                ->make(true);
        } else {
            return view('admin.pengaduan-masyarakat.index');
        }
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
        $data = Pengaduan::find($id)->first();
        return view('admin.pengaduan-masyarakat.detail',[
            'data' => $data
        ]);
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
