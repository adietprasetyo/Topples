@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="h1">Data Info Produk</h1>
        <a href="{{ route('infoProduk.create') }}"><button class="btn btn-success">Tambah</button></a>
    </div>
    <hr>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Produk ID</th>
                <th>Berat</th>
                <th>Kondisi</th>
                <th colspan="2"class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->produk_id }}</td>
                    <td>{{ $item->berat }} Gram</td>
                    <td>{{ $item->kondisi }}</td>
                    <td align="center"><a href="{{ route('infoProduk.edit',$item->id) }}"
                            class="btn btn-warning">Edit</a></td>
                    <td align="center">
                        <form action="{{ route('infoProduk.destroy',$item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        <div class="alert alert-danger">Data Kosong</div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
