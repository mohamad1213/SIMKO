@extends('layout.app_user')

@section('content')
<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 text-white animated slideInLeft">Keanggotaan</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Beranda</a></li>
                        <li class="breadcrumb-item text-white">Halaman</li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Keanggotaan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Search Start -->
<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-6 col-md-8">
            <form action="#" method="GET" class="d-flex">
                <input type="text" name="query" class="form-control me-2" placeholder="Cari anggota terverifikasi..." value="{{ request('query') }}">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search me-1"></i> Cari</button>
            </form>
        </div>
    </div>

<!-- Search End -->

@endsection
