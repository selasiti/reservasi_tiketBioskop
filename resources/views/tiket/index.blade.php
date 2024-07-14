@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Pesan Tiket</h1>
        <a href="{{ route('tiket.create') }}" class="btn btn-primary mb-3">Create New Tiket</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Flim</th>
                    <th>Genre</th>
                    <th>Studio</th>
                    <th>Tempat Duduk</th>
                    <th>Jumlah Tiket</th>
                    <th>Jam Tayang</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiket as $tiket)
                <tr>
                    <td>{{ $tiket->id }}</td>
                    <td>{{ $tiket->nama_pelanggan }}</td>
                    <td>{{ $tiket->flim }}</td>
                    <td>{{ $tiket->genre }}</td>
                    <td>{{ $tiket->studio }}</td>
                    <td>{{ $tiket->tempat_duduk }}</td>
                    <td>{{ $tiket->jumlah_tiket }}</td>
                    <td>{{ $tiket->jam_tayang }}</td>
                    <td>{{ $tiket->tanggal_pemesanan}}</td>
                    <td>{{ $tiket->total_harga }}</td>
                    <td>
                        <form action="{{ route('tiket.destroy', $tiket->id) }}" method="POST">
                            <a href="{{ route('tiket.show', $tiket->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('tiket.edit', $tiket->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this tiket?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
