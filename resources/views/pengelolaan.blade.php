@extends('layouts.app')

<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>

@section('content')
<div class="container my-5 ">
    <h3 class="mb-4 text-center fw-bold">Katalog Produk Juragan Tas</h3>
    <div class="row g-4 ">
        @foreach($produk as $item)
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('assets/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height: 300px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $item['nama'] }}</h5>
                    <p class="text-center text-muted mb-1">Harga: <strong>Rp{{ number_format($item['harga'], 0, ',', '.') }}</strong></p>
                    <p class="text-center text-muted mb-1">Stok: <strong>{{ $item['stok'] }}</strong></p>
                    <p class="text-center small text-secondary mt-3">{{ $item['deskripsi'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
