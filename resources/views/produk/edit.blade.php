@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Produk</h1>
            <hr>
            <form action="{{ route('produks.update', ['produk' => $produk->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk"
                    name="nama_produk" value="{{ old('nama_produk') ?? $produk->nama_produk }}">
                    @error('nama_produk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') ?? $produk->harga }}">
                    @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') ?? $produk->stok }}">
                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags"
                    name="tags" value="{{ old('tags') ?? $produk->tags }}">
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control">{{ old('deskripsi') ?? $produk->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating') ?? $produk->rating }}">
                    @error('rating')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="asuransi">Asuransi</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="asuransi" id="iya" value="Y" {{ (old('asuransi') ?? $produk->asuransi) == 'Y' ? 'checked' : ''}}>
                        <label for="iya" class="form-check-label">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="asuransi" id="tidak" value="N" {{ (old('asuransi') ?? $produk->asuransi) == 'N' ? 'checked' : ''}}>
                        <label for="tidak" class="form-check-label">Tidak</label>
                    </div>
                    @error('asuransi')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                
            </form>
        </div>
    </div>
</div>
@endsection