<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::find(Auth::guard('admin')->user()->id);
        if ($data == null) {
            abort(404);
        }

        return view('admin.auth.profile', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required|unique:users,username,' . $id . ',id,deleted_at,NULL',
            'phone' => 'required',
            'email' => 'required|max:255|email|unique:users,email,' . $id . ',id,deleted_at,NULL'
        ], [
            'required' => ':attribute tidak boleh kosong!',
            'max' => ':attribute maksimal panjang 225 karakter!',
            'email' => ':attribute format salah!',
            'unique' => ':attribute sudah ada!'
        ]);

        try {
            $user = User::findOrFail($id);

            // if (User::where('username', $request->username)->where('id', '!=', $id)->exists()) {
            //     return redirect()->back()
            //         ->with('error', 'Username sudah terdaftar.');
            // }

            // if (User::where('email', $request->email)->where('id', '!=', $id)->exists()) {
            //     return redirect()->back()
            //         ->with('error', 'Email sudah terdaftar.');
            // }

            // if (User::where('phone', $request->phone)->where('id', '!=', $id)->exists()) {
            //     return redirect()->back()
            //         ->with('error', 'Phone sudah terdaftar.');
            // }

            if ($request->file('photo')) {
                //hapus old image
                Storage::disk('local')->delete('public/upload/user/' . $user->photo);

                $file = $request->file('photo');

                $photo = time() . "-" . $file->getClientOriginalName();

                $path = $request->file('photo')->storeAs('public/upload/user/', $photo);

                $data = [
                    'photo' => $photo
                ];

                $user->update($data);
            }

            $data = [
                'name' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone
            ];

            if ($request->password != null || $request->password != '') {
                $data['password'] = bcrypt($request->password);
            }

            User::find($id)->update($data);

            return redirect()->back()
                ->with('success', 'Profile berhasil diedit.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        } catch (\Throwable $e) {
            return redirect()->back()
                ->with('error', "Error on line {$e->getLine()}: {$e->getMessage()}");
        }
    }
}
