@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #ffffffff;
        overflow-x: hidden;
    }
    .dashboard-section {
        padding: 60px 40px;
        text-align: center;
        background-color: #ffffffff;
    }

    .dashboard-card {
        background-color: #ffffff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
    }
    .dashboard-card .card-body {
        padding: 35px;
    }
    .info-section {
        background-color: #7a1c00;
        color: white;
        padding: 190px 15vw;
        text-align: center;
    }
    .info-section h1 {
        font-family: "Playfair Display", serif;
        font-style: italic;
        font-size: 4rem;
        margin-bottom: 25px;
    }
    .info-section p {
        font-size: 1.52rem;
        line-height: 1.8;
        max-width: 1000px;
        margin: 0 auto;
    }

    footer {
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>

<div class="container-fluid p-0">
    {{-- Section untuk Dashboard --}}
    <div class="dashboard-section">
        <h4 class="mb-5 fs-3 fw-bold text-center">Dashboard</h4>
        @if ($username)
        <p><strong>Selamat Datang King, {{ $username }}</strong>!</p>
        @endif

        <div class="row justify-content-center g-4">
            <div class="col-md-3">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h6>Total Produk</h6>
                        <h4 class="fw-bold">{{ $totalProduk ?? 4 }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h6>Jumlah Stok Produk</h6>
                        <h4 class="fw-bold">{{ $totalStok ?? 120 }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h6>Total Nilai Produk</h6>
                        <h4 class="fw-bold">Rp{{ number_format($totalNilai, 0, ',', '.') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bagian Juragan Tas --}}
    <div class="info-section">
        <h1>Juragan Tas</h1>
        <p>
            Juragan Tas merupakan perusahaan yang bergerak di bidang dagang ritel dan grosir.
            Juragan Tas kini tengah berkembang dengan 8 cabang toko yang tersebar di wilayah Banyuwangi.
            Juragan Tas menjual produk unggulan yang berkualitas dengan harga yang pas.
        </p>
    </div>
</div>
@endsection
