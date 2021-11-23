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
          <h2 class="mb-3 mt-5">Tujuan BSO HMJTI</h2>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ab minima veniam error deserunt repudiandae perferendis repellendus delectus nam quis earum explicabo provident iusto, id odio totam laboriosam blanditiis ad.
          </p>
        </div>
    </div>
</section>

@endsection
