<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursi;

class kursiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Hanya pengguna yang sudah login yang dapat mengakses fungsi-fungsi dalam controller ini
    }

    public function index()
    {
        $Kursi = Kursi::all();
        return view('Kursi.index', compact('Kursi'));
    }

    public function create()
    {
        return view('Kursi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'seat_number' => 'required|integer|unique:Kursi',
            'row' => 'required',
            'is_available' => 'required|boolean',
            'status' => 'required',
        ], [
            'seat_number.required' => 'Nomor Kursi harus diisi.',
            'seat_number.integer' => 'Nomor Kursi harus berupa angka.',
            'seat_number.unique' => 'Nomor Kursi sudah ada.',
            'status.required' => 'Status Kursi harus dipilih.',
        ]);

        Kursi::create($request->all());

        return redirect()->route('Kursi.index')
                         ->with('success', 'Kursi berhasil ditambahkan.');
    }

    public function show(Kursi $kursi)
    {
        return view('Kursi.show', compact('kursi'));
    }

    public function edit(Kursi $kursi)
    {
        return view('Kursi.edit', compact('kursi'));
    }

    public function update(Request $request, Kursi $kursi)
    {
        $request->validate([
            'seat_number' => 'required|integer|unique:Kursi,seat_number,' . $kursi->id,
            'status' => 'required',
        ], [
            'seat_number.required' => 'Nomor Kursi harus diisi.',
            'seat_number.integer' => 'Nomor Kursi harus berupa angka.',
            'seat_number.unique' => 'Nomor Kursi sudah ada.',
            'status.required' => 'Status Kursi harus dipilih.',
        ]);

        $kursi->update($request->all());

        return redirect()->route('Kursi.index')
                         ->with('success', 'Kursi berhasil diupdate.');
    }

    public function destroy(Kursi $kursi)
    {
        $kursi->delete();

        return redirect()->route('Kursi.index')
                         ->with('success', 'Kursi berhasil dihapus.');
    }
}   