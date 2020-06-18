@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h2>Tabel Data Produk</h2>
                <a href="{{ url('/produks/create') }}" class="btn btn-primary">Tambah Produk</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Tags</th>
                        <th>Deskripsi</th>
                        <th>Rating</th>
                        <th>Asuransi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produks as $produk)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>Rp. {{ number_format($produk->harga, 2, ',', '.') }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->tags }}</td>
                            <td>{{ $produk->deskripsi == '' ? 'N/A' : $produk->deskripsi }}</td>
                            <td>{{ $produk->rating }}</td>
                            <td>{{ $produk->asuransi == 'T' ? 'Tidak' : 'Laki-laki' }}</td>
                            <td>{{ $produk->bagian }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-sm btn-warning m-1">Edit</a>
                                    <a href="{{ route('produks.show', $produk->id) }}" class="btn btn-sm btn-success m-1">Detail</a>
                                <form action="{{ route('produks.destroy', $produk->id) }}" method="post" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger m-1">Delete</button>
                                </form>
                                </div>
                            </td>
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