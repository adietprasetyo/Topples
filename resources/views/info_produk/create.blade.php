@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('infoProduk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produk_id">Produk ID</label>
            <input type="number" class="form-control @error('produk_id') is-invalid @enderror" name="produk_id"
                id="produk_id" value="{{ old('produk_id') }}">
            @error('produk_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="berat">Berat</label>
            <input type="number" class="form-control @error('berat') is-invalid @enderror" name="berat" id="berat"
                value="{{ old('berat') }}">
            @error('berat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select class="form-control @error('kondisi') is-invalid @enderror" name="kondisi" id="kondisi">
                <option value="Baru" {{old('kondisi')=='Baru'?'selected':''}}>Baru</option>
                <option value="Bekas"{{old('kondisi')=='Bekas'?'selected':''}}>Bekas</option>
            </select>
            @error('kondisi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
