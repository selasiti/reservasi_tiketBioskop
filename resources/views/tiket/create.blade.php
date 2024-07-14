@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create New Tiket</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('tiket.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pelangan">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="form-group">
                <label for="flim">Flim:</label>
                <input type="text" class="form-control" id="flim" name="flim" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
                <label for="studio">Studio:</label>
                <input type="text" class="form-control" id="studio" name="studio" required>
            </div>
            <div class="form-group">
                <label for="tempat_duduk">Tempat Duduk:</label>
                <input type="text" class="form-control" id="tempat_duduk" name="tempat_duduk" required>
            </div>
            <div class="form-group">
                <label for="jumlah_tiket">Jumlah Tiket:</label>
                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" required>
            </div>
            <div class="form-group">
                <label for="jam_tayang">Jam Tayang:</label>
                <input type="time" class="form-control" id="jam_tayang" name="jam_tayang" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
                <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="number" step="0.01" class="form-control" id="total_harga" name="total_harga" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
