@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Data Gambar Produk</h1>
        <hr>
        <a href="{{route('gambar.create')}}" class="btn btn-primary">Tambah</a>
        <div class="row my-2">
            @foreach($data as $item)
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('gambar.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('gambar.destroy',$item->id)}}" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <button type="submit"class="btn btn-danger ml-2">Hapus</button>
                        </form>
                    </div>
                    @foreach ($produk as $data)
                    <a href="{{route('gambar.show',$item->id)}}"><h1 class="text-center">Produk ID : {{ $data->nama_produk }}</h1></a>
                    @endforeach
                    <div id="carouselExampleIndicators-{{ $item->produk_id }}" class="carousel slide"
                        data-ride="carousel" >
                        <ol class="carousel-indicators bg-dark">
                            <li data-target="#carouselExampleIndicators-{{ $item->produk_id }}" data-slide-to="0"
                                class="active"></li>
                            <li data-target="#carouselExampleIndicators-{{ $item->produk_id }}" data-slide-to="1">
                            </li>
                            <li data-target="#carouselExampleIndicators-{{ $item->produk_id }}" data-slide-to="2">
                            </li>
                            <li data-target="#carouselExampleIndicators-{{ $item->produk_id }}" data-slide-to="3">
                            </li>
                            <li data-target="#carouselExampleIndicators-{{ $item->produk_id }}" data-slide-to="4">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ Storage::url($item->foto_1) }}" class="d-block w-100" alt="..."style="widht:800px;height:400px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->foto_2) }}" class="d-block w-100" alt="..."style="widht:800px;height:400px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->foto_3) }}" class="d-block w-100" alt="..."style="widht:800px;height:400px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->foto_4) }}" class="d-block w-100" alt="..."style="widht:800px;height:400px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ Storage::url($item->foto_5) }}" class="d-block w-100" alt="..."style="widht:800px;height:400px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators-{{ $item->produk_id }}"
                            role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators-{{ $item->produk_id }}"
                            role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('script-ops')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
@endsection
