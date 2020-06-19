@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('gambar.index')}}" class="btn btn-primary">Kembali</a>
    <h1>Produk ID : {{$gambar->produk_id}} </h1>
    <hr>
    <div class="row">
        <div class="col-md-4 my-2" align="center">
            <div class="card" style="width: 20rem;">
                <img src="{{ Storage::url('public/'.$gambar->foto_1) }}"
                    class="card-img-top" alt="..." style="width: 20rem;height:20rem">
                <div class="card-body">
                    Gambar 1
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2" align="center">
            <div class="card" style="width: 20rem;">
                <img src="{{ Storage::url('public/'.$gambar->foto_2) }}"
                    class="card-img-top" alt="..." style="width: 20rem;height:20rem">
                <div class="card-body">
                    Gambar 2
                </div>
            </div>
        </div>
        <div class="col-md-4 my-2" align="center">
            <div class="card" style="width: 20rem;">
                <img src="{{ Storage::url('public/'.$gambar->foto_3) }}"
                    class="card-img-top" alt="..." style="width: 20rem;height:20rem">
                <div class="card-body">
                    Gambar 3
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 my-2" align="center">
            <div class="card" style="width: 20rem;">
                <img src="{{ Storage::url('public/'.$gambar->foto_4) }}"
                    class="card-img-top" alt="..." style="width: 20rem;height:20rem">
                <div class="card-body">
                    Gambar 4
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2" align="center">
            <div class="card" style="width: 20rem;">
                <img src="{{ Storage::url('public/'.$gambar->foto_5) }}"
                    class="card-img-top" alt="..." style="width: 20rem;height:20rem">
                <div class="card-body">
                    Gambar 5
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
