@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tikets Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tiket ID: {{ $tiket->id }}</h5>
                <p class="card-text"><strong>Nama Pelanggan:</strong> {{ $tiket->nama_pelanggan }}</p>
                <p class="card-text"><strong>Flim:</strong> {{ $tiket->flim }}</p>
                <p class="card-text"><strong>Genre:</strong> {{ $tiket->genre }}</p>
                <p class="card-text"><strong>Studio:</strong> {{ $tiket->studio }}</p>
                <p class="card-text"><strong>Tempat Duduk:</strong> {{ $tiket->tempat_duduk }}</p>
                <p class="card-text"><strong>Jumlah Tiket:</strong> {{ $tiket->jumlah_tiket }}</p>
                <p class="card-text"><strong>Jam Tayang:</strong> {{ $tiket->jam_tayang }}</p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> {{ $tiket->tanggal_pemesanan }}</p>
                <p class="card-text"><strong>Total Harga:</strong> {{ $tiket->total_harga }}</p>
                <a href="{{ route('tiket.edit', $tiket->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('tiket.destroy', $tiket->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this tiket?')">Delete</button>
                </form>
                <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
