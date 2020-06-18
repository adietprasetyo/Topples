@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3">
                <h1 class="h1 mr-auto">Produk {{ $produk->nama_produk }}</h1>
                <hr>
                <ul>
                    <li>ID : {{ $produk->id }}</li>
                    <li>Produk : {{ $produk->nama_produk }}</li>
                    <li>Harga : Rp. {{ number_format($produk->harga, 2, ',', '.') }}</li>
                    <li>Stock : {{ $produk->stok }}</li>
                    <li>Deskripsi : {{ $produk->deskripsi == '' ? 'N/A' : $produk->deskripsi}}</li>
                    <li>Rating : {{ $produk->rating }}</li>
                    <li>Asuransi : {{ $produk->asuransi == 'T' ? 'Tidak' : 'Iya' }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection