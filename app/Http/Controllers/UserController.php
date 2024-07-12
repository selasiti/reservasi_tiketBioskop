<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            "users" => User::all(),
        ];
        return view('user.index', $data);
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index')->with('success', $users->name . " berhasil dihapus");
    }

    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        $data = [
            "user" => $users,
            "roles" => $roles
        ];
        return view('user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email,' . $id],
            'password' => ['nullable', 'confirmed'],
            'password_confirmation' => ['nullable'],
            'role_id' => ['required', 'numeric'],
        ]);

        $user = User::find($id);

        // Update data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect()->route('user.index')->with('success', $user->name . " berhasil diupdate");
    }

    public function create()
    {
        $roles = Role::all();
        $data = [
            "roles"  => $roles
        ];
        return view('user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
            'role_id' => ['required', 'numeric'],
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect()->route('user.index')->with('success', $user->name . " berhasil ditambahkan");
    }
}
