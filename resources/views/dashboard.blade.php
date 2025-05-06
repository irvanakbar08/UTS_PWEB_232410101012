@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="dashboard-content">
        <section class="selamat">
            <h1>Selamat Datang <span class="highlight">{{ $username }} 👋</span></h1>
            <p>AKBAR JAYA adalah toko bangunan terpercaya yang menyediakan berbagai kebutuhan konstruksi dan renovasi rumah.
                Mulai dari semen, cat, alat bangunan, hingga perlengkapan listrik kami sediakan lengkap dengan harga
                bersahabat.</p>
        </section>

        <section class="image-section">
            <img src="{{ asset('img/bg.jpg') }}"
                alt="Toko Bangunan" class="dashboard-image">
        </section>
    </main>
@endsection
