@extends('layouts.template-front')
@section('content')
<div class="banner-image-aspirasi">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="">
</div>
<div class="container-fluid banner-blog ">
    <div class="container text-center">
        <h2>PROFIL BSO HMTJI</h2>
        <p class="mt-4">Politeknik Negeri Jember-Kampus Bondowoso</p>
    </div>
</div>
<section class="container py-5 header__profil h-100 w-100">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 text-center">
          <h2 class="mb-3 mt-5">Sejarah BSO HMJTI</h2>
          <p style="line-height: 1.0cm">
            {{ $sejarah }}
          </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center">
            <h2 class="mb-3 mt-5">Visi HMJTI</h2>
            <p style="line-height: 1.0cm">
                {{ $content->visi }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12">
            <h2 class="mb-3 mt-5 text-center">Misi HMJTI</h2>
            <p class="card-text mb-4" style="line-height: 1.0cm">
                {!! $content->misi !!}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center">
            <h2 class="mb-3 mt-5">Motto HMJTI</h2>
            <p style="line-height: 1.0cm">
                {{ $content->moto }}
            </p>
            </div>
        <div class="col-lg-8 col-md-12 text-center">
            <h2 class="mb-3 mt-5">Tujuan BSO HMJTI</h2>
            <p style="line-height: 1.0cm">
                {{ $tujuan }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center">
            <h2 class="mb-3 mt-5">Fungsi BSO HMJTI</h2>
            <p style="line-height: 1.0cm">
                {{ $fungsi }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center">
            <h2 class="mb-3 mt-5">Tugas BSO HMJTI</h2>
            <p style="line-height: 1.0cm; text-align:center">
                {{ $tugas }}
            </p>
        </div>
    </div>
</section>

@endsection
