@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('merk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produk_id">Produk ID</label>
            <input type="number" class="form-control @error('produk_id') is-invalid @enderror" name="produk_id"
                id="produk_id" value="{{old('produk_id')}}">
            @error('produk_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_merk">Nama Merk</label>
            <input type="text" class="form-control @error('nama_merk') is-invalid @enderror" name="nama_merk"
                id="nama_merk" value="{{old('nama_merk')}}">
            @error('nama_merk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
