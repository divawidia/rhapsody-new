<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('users.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('users.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('photo_url', function ($item) {
                    return $item->photo_url ? '<img src="' . Storage::url($item->photo_url) . '" style="max-height: 80px;"/>' : '';
                })
                ->editColumn('created_at', function ($item){
                    $date = strtotime($item->created_at);
                    return date('l, M d, Y',$date);
                })
                ->editColumn('status', function ($item){
                    if ($item->status == 1) {
                        $badge = '<span class="badge bg-success">Aktif</span>';
                    }elseif ($item->status == 0){
                        $badge = '<span class="badge bg-danger">Non Aktif</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'photo_url', 'created_at', 'status'])
                ->make();
        }
        $title = 'Hapus User!';
        $text = "Apakah anda yakin ingin menghapus user ini?";
        confirmDelete($title, $text);
        return view('pages.admin.user.index');
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);
        $data['photo_url'] = $data['photo_url']->store('assets/user-profile', 'public');
        $data['roles'] = 'ADMIN';

        User::create($data);
        Alert::success('Hore!', 'Anda berhasil registrasi akun! mohon untuk menunggu konfirmasi dari admin agar bisa login');
        return redirect()->route('users.index')->with('status', 'Registrasi akun berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.user.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('photo_url')){
            $data['photo_url'] = $request->file('photo_url')->store('assets/user-profile', 'public');
        }

        if ($request->status == '1'){
            $data['status'] = 1;
        }elseif ($request->status == '0') {
            $data['status'] = 0;
        }

        $user->update($data);
        Alert::success('Hore!', 'User Berhasil Diupdate!');
        return redirect()->route('users.index')->with('status', 'Data user berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        alert()->success('Hore!','User berhasil dihapus!');
        return redirect()->route('users.index')->with('status', 'Data user berhasil dihapus!');
    }
}
