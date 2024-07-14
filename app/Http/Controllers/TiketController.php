<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{

    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'flim' => 'required',
            'genre' => 'required',
            'studio' => 'required',
            'tempat_duduk' => 'required',
            'jumlah_tiket' => 'required|integer',
            'jam_tayang' => 'required|date_format:H:i',
            'tanggal_pemesanan' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        Tiket::create($request->all());
        return redirect()->route('tiket.index');
    }

    public function show(Tiket $tiket)
    {
        return view('tiket.show', compact('tiket'));
    }

    public function edit(Tiket $tiket)
    {
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, Tiket $tiket)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'flim' => 'required',
            'genre' => 'required',
            'studio' => 'required',
            'tempat_duduk' => 'required',
            'jumlah_tiket' => 'required|integer',
            'jam_tayang' => 'required|date_format:H:i',
            'tanggal_pemesanan' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);

        $tiket->update($request->all());
        return redirect()->route('tiket.index');
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();
        return redirect()->route('tiket.index');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
