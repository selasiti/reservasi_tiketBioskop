<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tiket') }}</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1 class="mb-4">{{ __('𝐑𝐞𝐬𝐞𝐫𝐯𝐚𝐬𝐢 𝐓𝐢𝐤𝐞𝐭 𝐁𝐢𝐨𝐬𝐤𝐨𝐩') }}</h1>
                        <!-- Gambar dengan ukuran inline CSS -->
                        <img src="{{ asset('img/img.logo.jpg') }}" style="max-width: 250px; height: auto;" class="img-fluid rounded mb-4" alt="Dashboard Image">
                        <p class="mb-4">{{ __('Selamat Datang di Pemesanan Bioskop Kami!') }}</p>
                        <p class="lead">Nikmati pengalaman menonton film terbaik bersama kami. Jelajahi berbagai film menarik dan buat reservasi tiket Anda sekarang</p>
                        <a href="#" class="btn btn-primary mt-3">Daftar Film</a>
                    </div>
                     <!-- Menambahkan 5 gambar di bawah teks "Selamat Datang" -->
                </div>
            </div>
        </div>
    </div>
@endsection
