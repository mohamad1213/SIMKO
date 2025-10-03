@extends('layout.app')

@section('content')
<div class="container">
    <h1>Galeri</h1>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary">Tambah Foto</a>

    <div class="row mt-3">
        @foreach($galeris as $item)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body">
                        <h5>{{ $item->judul }}</h5>
                        <p>{{ $item->deskripsi }}</p>
                        <small>{{ $item->tanggal }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
