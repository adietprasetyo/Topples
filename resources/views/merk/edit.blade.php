@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('merk.update',$merk->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nama_merk">Nama Merk</label>
            <input type="text" class="form-control @error('nama_merk') is-invalid @enderror" name="nama_merk"
                id="nama_merk" value="{{old('nama_merk')??$merk->nama_merk}}">
            @error('nama_merk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
