@extends('layouts.template-front')
@section('content')
<div class="banner-image-blog">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="">
</div>
<div class="container-fluid banner-blog ">
    <div class="container text-center">
        <h2>Struktur Kepengurusan</h2>
        <p class="mt-4">2020-2021</p>
    </div>
</div>

<section class="container py-5 header__struktur h-100 w-100">
    <h3 class="text-center">BPH</h3>
    <h2 class="text-center">Badan Pengurus Harian</h2>
    <div class="containe py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-4">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('frontend/assets/images/ketua.jpg') }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                </div>
                <div class="text-center p-3">
                    <h4>Moch. Fahrony</h4>
                    <p>Ketua BSO HMJTI </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('frontend/assets/images/wakil.png') }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                </div>
                <div class="text-center p-3">
                    <h4>Vita Nada Agustiny</h4>
                    <p>Wakil BSO HMJTI </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-lg-3 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('frontend/assets/images/wakil.png') }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                </div>
                <div class="text-center p-3">
                    <h4>Vita Nada Agustiny</h4>
                    <p>Wakil BSO HMJTI </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('frontend/assets/images/wakil.png') }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                </div>
                <div class="text-center p-3">
                    <h4>Vita Nada Agustiny</h4>
                    <p>Wakil BSO HMJTI </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('frontend/assets/images/wakil.png') }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                </div>
                <div class="text-center p-3">
                    <h4>Vita Nada Agustiny</h4>
                    <p>Wakil BSO HMJTI </p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
