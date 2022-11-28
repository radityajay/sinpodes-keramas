<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->type == 'datatable') {
            $data = RoleUser::orderBy('name');

            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $action = '';

                    $action .= '<a href="' . route('user.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    if($data->is_default == false){
                        $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="user/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';
                    }

                    return $action;
                })
                ->editColumn('is_active', function ($data) {
                    if($data->is_active == true){
                        return 'Active';
                    } else{
                        return 'Not Active';
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.user.index', [
            'page_title' => 'User',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();

        return view('admin.user.form', [
            'page_title' => 'User',
            'role' => $role
        ]);
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
            'username' => 'required|unique:role_users',
            'email' => 'required|unique:role_users',
            'role_id' => 'required',
        ]);

        try{
            RoleUser::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'password' => bcrypt($request->password),
                'is_active' => $request->is_active == 'true' ? true : false
            ]);

            return redirect()->route('user.index')
                ->with('success', 'User berhasil dibuat');
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
        $data = RoleUser::where('id', $id)->first();
        $role = Role::all();

        if(!$data){
            abort(404);
        }

        return view('admin.user.form', [
            'data' => $data,
            'role' => $role
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

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            // 'role_id' => 'required',
        ]);

        try {
            $formData = ([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'is_active' => $request->is_active == 'true' ? true : false
            ]);

            if($request->password != null || $request->password != ''){
                $formData['password'] = bcrypt($request->password);
            }

            RoleUser::find($id)->update($formData);

            return redirect()->route('user.index')
                ->with('success', 'User berhasil diubah');
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
        try {
            RoleUser::find($id)->delete();
            return response()->json([
                "message" => "User berhasil dihapus."
            ]);
        } catch (\Exception $e) {
            return response()->json("Error on line {$e->getLine()}: {$e->getMessage()}", 500);
        } catch (\Throwable $e) {
            return response()->json("Error on line {$e->getLine()}: {$e->getMessage()}", 500);
        }
    }
}
