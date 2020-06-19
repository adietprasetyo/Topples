@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Promo</h1>
            <hr>
        <form action="{{ route('promo.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_promo">Kode Promo</label>
                <input type="text" class="form-control @error('kode_promo') is-invalid @enderror" id='kode_promo' name='kode_promo' value="{{ old('kode_promo') }}">
                @error('kode_promo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_promo">Nama Promo</label>
                <input type="text" class="form-control @error('nama_promo') is-invalid @enderror" id='nama_promo' name='nama_promo' value="{{ old('nama_promo') }}">
                @error('nama_promo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nilai_promo">Nilai Promo</label>
                <input type="text" class="form-control @error('nilai_promo') is-invalid @enderror" id='nilai_promo' name='nilai_promo' value="{{ old('nilai_promo') }}">
                @error('nilai_promo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>           
            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </form>
      </div>
    </div>
</div>   
@endsection