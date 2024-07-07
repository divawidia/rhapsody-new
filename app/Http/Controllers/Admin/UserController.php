<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function setting()
    {
        return view('pages.admin.user.setting',[
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validate([
            'status' => ['in:1,0', 'nullable'],
        ]);
        if ($request->status == null){
            $data['status'] = '0';
        }
        $user->update([
            'status' => $data['status']
        ]);
        Alert::success('Hore!', 'User Berhasil Diupdate!');
        return redirect()->route('users.index')->with('status', 'Data user berhasil diupdate!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateSetting(Request $request)
    {
        $userId = Auth::user()->getAuthIdentifier();
        $user = User::findOrFail($userId);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $userId],
            'photo_url' => ['image'],
        ]);
        if ($request->hasFile('photo_url')){
            Storage::delete($user->photo_url);
            $data['photo_url'] = $data['photo_url']->store('assets/user-profile', 'public');
        }else{
            $data['photo_url'] = $user->photo_url;
        }
        $data['roles'] = 'ADMIN';

        if ($user->status == '1'){
            $data['status'] = '1';
        }else{
            $data['status'] = '0';
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
        Storage::delete($user->photo_url);
        $user->delete();
        alert()->success('Hore!','User berhasil dihapus!');
        return redirect()->route('users.index')->with('status', 'Data user berhasil dihapus!');
    }
}
