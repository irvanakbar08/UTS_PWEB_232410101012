@extends('layouts.app')

@section('title', 'Pengelolaan Barang')

@section('content')
    <div class="management-container">
        <h2>Daftar Barang</h2>
        <div class="top-bar">
            <form action="#" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Cari barang / kategori..." class="search-input">
                <button type="submit" class="btn search-btn">Cari</button>
            </form>
            <a href="#" class="btn tambah-btn">+ Tambah Barang</a>
        </div>

        <table class="barang-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Banyak Barang</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                        <td>
                            <a href="#" class="btn edit-btn">Edit</a>
                            <a href="#" class="btn delete-btn">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
