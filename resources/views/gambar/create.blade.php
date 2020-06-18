@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <form action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="produk_id">Produk ID</label>
                    <input type="number" name="produk_id" id="produk_id"
                        class="form-control @error('produk_id') is-invalid @enderror"
                        value="{{ old('produk_id') }}">
                    @error('produk_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto_1">Gambar 1</label>
                    <input type="file" name="foto_1" id="foto_1" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="foto_2">Gambar 2</label>
                    <input type="file" name="foto_2" id="foto_2" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="foto_3">Gambar 3</label>
                    <input type="file" name="foto_3" id="foto_3" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="foto_4">Gambar 4</label>
                    <input type="file" name="foto_4" id="foto_4" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="foto_5">Gambar 5</label>
                    <input type="file" name="foto_5" id="foto_5" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
