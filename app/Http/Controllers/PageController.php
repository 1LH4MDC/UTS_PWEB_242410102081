<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // LOGIN
    public function doLogin(Request $request)
    {
        
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        if ($username && $password) {
            return redirect()->route('dashboard', [
                'username' => $username,
                'email' => $email
            ]);
        } else {
            return redirect()->route('login')->with('error', 'Semua field wajib diisi!');
        }
    }

    // DASHBOARD 
    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $email = $request->query('email');
        

        
        $produkharga = [
            ['nama' => 'Tas Kulit Premium', 'harga' => 250000],
            ['nama' => 'Tas Ransel Canvas', 'harga' => 180000],
            ['nama' => 'Tote Bag', 'harga' => 120000],
            ['nama' => 'Tas Selempang', 'harga' => 150000],
            ['nama' => 'Hand Bag', 'harga' => 220000],
            ['nama' => 'Koper', 'harga' => 450000],
            ['nama' => 'Tas Carrier Gunung', 'harga' => 380000],
            ['nama' => 'Tas Kerja', 'harga' => 275000],
        ];

        $produkstok = [
            ['nama' => 'Tas Kulit Premium', 'stok' => 10],
            ['nama' => 'Tas Ransel Canvas', 'stok' => 15],
            ['nama' => 'Tote Bag', 'stok' => 8],
            ['nama' => 'Tas Selempang', 'stok' => 20],
            ['nama' => 'Hand Bag', 'stok' => 12],
            ['nama' => 'Koper', 'stok' => 6],
            ['nama' => 'Tas Carrier Gunung', 'stok' => 9],
            ['nama' => 'Tas Kerja', 'stok' => 15],
        ];



        $totalProduk = count($produkharga);
        $totalStok = array_sum(array_column($produkstok, 'stok'));
        $totalNilai = array_sum(array_column($produkharga, 'harga'));
        return view('dashboard', compact('username', 'email', 'totalProduk', 'totalStok', 'totalNilai'));
    }

    // PENGELOLAAN 
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $email = $request->query('email');
        

        $produk = [
            [
                'nama' => 'Tas Kulit Premium',
                'harga' => 250000,
                'stok' => 10,
                'gambar' => 'tas_ransel_kulit.jpeg',
                'deskripsi' => 'Tas kulit elegan untuk aktivitas harian dan kerja, berbahan kulit asli berkualitas tinggi.'
            ],
            [
                'nama' => 'Tas Ransel Canvas',
                'harga' => 180000,
                'stok' => 15,
                'gambar' => 'tas_ransel.jpeg',
                'deskripsi' => 'Ransel kasual dari bahan kanvas kuat, cocok untuk sekolah atau perjalanan.'
            ],
            [
                'nama' => 'Tote Bag',
                'harga' => 120000,
                'stok' => 8,
                'gambar' => 'tote_bag.webp',
                'deskripsi' => 'Tote bag stylish, ringan dan fleksibel.'
            ],
            [
                'nama' => 'Tas Selempang',
                'harga' => 150000,
                'stok' => 20,
                'gambar' => 'tas_selempang.jpg',
                'deskripsi' => 'Tas selempang praktis dan modern, ideal untuk aktivitas outdoor dan kerja.'
            ],
            [
                'nama' => 'Hand Bag',
                'harga' => 220000,
                'stok' => 12,
                'gambar' => 'hand_bag.jpeg',
                'deskripsi' => 'Hand bag elegan berbahan kulit sintetis premium, cocok untuk acara formal dan kasual.'
            ],
            [
                'nama' => 'Koper',
                'harga' => 450000,
                'stok' => 6,
                'gambar' => 'koper.webp',
                'deskripsi' => 'Koper berukuran sedang dengan roda 360°, kuat dan ringan, ideal untuk perjalanan jauh.'
            ],
            [
                'nama' => 'Tas Carrier Gunung',
                'harga' => 380000,
                'stok' => 9,
                'gambar' => 'tas_carrier.jpeg',
                'deskripsi' => 'Tas carrier berkapasitas besar dengan tali ergonomis, cocok untuk pendakian dan traveling.'
            ],
            [
                'nama' => 'Tas Kerja',
                'harga' => 275000,
                'stok' => 15,
                'gambar' => 'tas_kerja.webp',
                'deskripsi' => 'Tas kerja profesional berbahan kulit sintetis dengan banyak kompartemen dan resleting kuat.'
            ],
        ];

        return view('pengelolaan', [
            'title' => 'Pengelolaan',
            'produk' => $produk,
            'username' => $username,
            'email' => $email
        ]);
    }

    // PROFILE 
    public function profile(Request $request)
    {
        $username = $request->query('username');
        $email = $request->query('email');
        

        if (!$username || !$email) {
            $error = 'Silakan login terlebih dahulu.';
            return view('profile', compact('error'));
        }

        return view('profile', compact('username', 'email'));
    }

    // LOGOUT
    public function logout()
    {
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
