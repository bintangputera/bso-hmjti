@extends('layouts.template-front')
@section('content')
<div class="banner-image-aspirasi">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="blog">
</div>
<div class="container-fluid banner-blog">
    <div class="container text-center">
        <h2>PROFIL BSO HMTJI</h2>
        <p class="mt-4">Politeknik Negeri Jember-Kampus Bondowoso</p>
    </div>
</div>
<section class="container py-5 header__profil h-100 w-100">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 shadow-sm p-5">
          <h2 class="mb-3 mt-5 text-center">Sejarah BSO HMJTI</h2>
          <p class="" style="text-indent: 20px; line-height: 2rem">
            {{ $sejarah }}
          </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center shadow-sm p-5 mt-5">
            <h2 class="mb-3">Visi HMJTI</h2>
            <p>
                {{ $content->visi }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 shadow-sm p-5 mt-5">
            <h2 class="mb-3 text-center">Misi HMJTI</h2>
            <div class="test mb-4">
                {!! $content->misi !!}
            </div>
        </div>
        <div class="col-lg-8 col-md-12 text-center shadow-sm p-5 mt-5">
            <h2 class="mb-3">Motto HMJTI</h2>
            <p>
                {{ $content->moto }}
            </p>
            </div>
        <div class="col-lg-8 col-md-12 text-center shadow-sm p-5 mt-5">
            <h2 class="mb-3">Tujuan BSO HMJTI</h2>
            <p>
                {{ $tujuan }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center shadow-sm p-5 mt-5">
            <h2 class="mb-3">Fungsi BSO HMJTI</h2>
            <p>
                {{ $fungsi }}
            </p>
        </div>
        <div class="col-lg-8 col-md-12 text-center shadow-sm p-5 mt-5">
            <h2 class="mb-3">Tugas BSO HMJTI</h2>
            <p>
                {{ $tugas }}
            </p>
        </div>
    </div>
</section>

@endsection
