<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        session(['password' => $password]);

        return redirect()->route('dashboard', [
            'username' => $username,
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $password = $request->query('password');

        return view('dashboard', compact('username', 'password'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $password = session('password');

        return view('profile', compact('username', 'password'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $barang = [
            ['id' => 1, 'nama' => 'Semen Tiga Roda', 'kategori' => 'Material', 'jumlah' => 100, 'harga' => 'Rp 55.000'],
            ['id' => 2, 'nama' => 'Semen Gresik', 'kategori' => 'Material', 'jumlah' => 10, 'harga' => 'Rp 53.000'],
            ['id' => 3, 'nama' => 'Semen Merah Putih', 'kategori' => 'Material', 'jumlah' => 50, 'harga' => 'Rp 50.000'],
            ['id' => 4, 'nama' => 'Lampu Philips 10 watt', 'kategori' => 'Elektronik', 'jumlah' => 20, 'harga' => 'Rp 20.000'],
            ['id' => 5, 'nama' => 'Lampu Philips 5 watt', 'kategori' => 'Elektronik', 'jumlah' => 50, 'harga' => 'Rp 15.000'],
            ['id' => 6, 'nama' => 'Cat Paragon #145', 'kategori' => 'Cat', 'jumlah' => 5, 'harga' => 'Rp 60.000'],
            ['id' => 7, 'nama' => 'Cat Paragon #135', 'kategori' => 'Cat', 'jumlah' => 7, 'harga' => 'Rp 58.000'],
            ['id' => 8, 'nama' => 'Cat Paragon #166', 'kategori' => 'Cat', 'jumlah' => 19, 'harga' => 'Rp 62.000'],
        ];

        return view('pengelolaan', compact('username', 'barang'));
    }
}
