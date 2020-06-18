@extends('layouts.app')

@section('content')    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h1 class="text-center">Data Promo</h1>
                <hr>
            <a href="{{ route('promo.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>

            {{--  Nampilin Flash Data --}}
            @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
            @endif
            {{--  End Flash Data --}}

            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode Promo</th>
                    <th scope="col">Nama Promo</th>
                    <th scope="col">Nilai Promo</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($promos as $promo)
                        <tr>
                        <td><a href=" {{ url('/promo/'.$promo->id) }} ">{{ $loop->iteration }}</a></td>
                        <td>{{ $promo->kode_promo}}</td>
                        <td>{{ $promo->nama_promo }}</td>
                        <td>{{ $tampil->nilai_promo }}</td>
                        </tr>
                    @empty
                        <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection