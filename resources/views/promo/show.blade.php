@extends('layouts.app')

@section('content')    
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3 d-flex justify-content-left align-items-center ">
                <h1 class="h1 mr auto text-center">Kode Promo {{ $promo->kode_promo }}</h1>
            </div>
            <hr>
            {{-- FLASH DATA --}}
            @if (session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            {{-- END FLASH DATA  --}}

            <ul>
                <li>Kode Promo           : {{ $promo->kode_promo }}</li>
                <li>Nama Promo           : {{ $promo->nama_promo }}</li>
                <li>Nilai Promo          : {{ $promo->nilai_promo }}</li>
            </ul>
            <div class="pt-3 d-flex justify-content-left align-items-center ">
                <a href="{{ route('promo.edit', $promo->id) }}" class="btn btn-warning mr-3">
                    Edit
                </a>
                <form action="{{ route('promo.destroy', ['promo' =>$promo->id]) }}" method='POST'>
                @method('DELETE')
                @csrf
                <button class="btn btn-danger mr-3" type="submit">Delete</button>
                </form>
                <a href="{{ route('promo.index', $promo->id) }}" class="btn btn-success">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection