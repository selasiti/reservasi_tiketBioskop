<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            "users" => user::all(),
        ];
        return view('user.index', $data);
    }
    public function destroy($id)
    {
        $users = user::find($id);
        $users ->delete();
        return redirect()->route('user.index')->with('succes', $users -> name . "berhasil dihapus");
    }
}
