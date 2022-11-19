<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use App\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->type == 'datatable') {
            $data = Role::orderBy('name');

            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $action = '';

                    $action .= '<a href="' . route('role.edit', $data->id) . '" class="me-3 text-primary" data-bs-toggle="tooltip" data-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>';

                    $action .= '<a class="text-danger delete-item" data-label="Customer" data-url="role/' . $data->id . '" data-id="' . $data->id . '" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>';

                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.role.index', [
            'page_title' => 'Role',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin.role.form', [
            'page_title' => 'Role',
            'permissions' => $permissions
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
            'permissions' => 'array'
        ]);

        DB::beginTransaction();
        try{
            $role = Role::create([
                'name' => $request->name
            ]);

            foreach ($request->permissions as $key => $value) {
                RolePermission::create([
                    'role_id' => $role->id,
                    'permission_id' => $value
                ]);
            }

            DB::commit();
            return redirect()->route('role.index')
                ->with('success', 'Role Berhasil Dibuat');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            DB::rollback();
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
        $data = Role::find($id);
        $permissions = Permission::all();

        if(!$data){
            abort(404);
        }

        return view('admin.role.form', [
            'data' => $data,
            'permissions' => $permissions
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
            'permissions' => 'array'
        ]);

        DB::beginTransaction();
        try{
            Role::find($id)->update([
                'name' => $request->name
            ]);

            RolePermission::where('role_id', $id)->delete();
            foreach ($request->permissions as $key => $value) {
                RolePermission::create([
                    'role_id' => $id,
                    'permission_id' => $value
                ]);
            }

            DB::commit();
            return redirect()->route('role.index')
                ->with('success', 'Role successfully updated');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withInput()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            DB::rollback();
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
            Role::find($id)->delete();
            RolePermission::where('role_id', $id)->delete();
            return response()->json('Role successfully deleted');
        } catch (\Exception $e) {
            return response()->json("Error on line {$e->getLine()}: {$e->getMessage()}", 500);
        } catch (\Throwable $e) {
            return response()->json("Error on line {$e->getLine()}: {$e->getMessage()}", 500);
        }
    }
}
