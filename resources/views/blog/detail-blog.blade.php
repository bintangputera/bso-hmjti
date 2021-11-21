@extends('layouts.template-front')
@section('content')
<div class="banner-image-blog">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="">
</div>
<div class="container-fluid banner-blog ">
    <div class="container text-center">
        <h2>BLOG</h2>
    </div>
</div>
<section class="container py-5 header__blog h-100 w-100">
    <div class="row">
        <div class="col-lg-8 mb-4" >
            <img src="{{ asset('img/blog/'.$data->images) }}" alt="" class="img-fluid w-100">
            <div class="mt-4">
                <strong class="mb-2 text-info">{{ $data->category_name }}</strong>
                <h3 class="mb-0">{{ $data->title }}</h3>
                <div class="mb-1 text-muted mt-1" style="font-size: 14px;">{{ $data->author }} | {{ $data->updated_at }}</div>
                <p class="card-text mb-4">
                    {!! $data->content !!}
                </p>
            </div>
        </div>

        <div class="col-lg-4 header__recent p-4">
            <h4>Recent Blog</h4>
            <ul>
                @forelse ($data_recent as $item)
                    <li><a href="{{ route('blog.front.detail',$item->slug) }}">{{ $item->title }}</a></li>
                @empty

                @endforelse
            </ul>
            <h4 class="pt-4">Link Terkait</h4>
            <ul>
                <li><a href="">Politeknik Negeri Jember</a></li>
                <li><a href="">Jurusan Teknologi Informasi</a></li>
                <li><a href="">BEM KM Polije</a></li>
                <li><a href="">HMJTI Polije</a></li>
            </ul>
        </div>
    </div>

</section>

@endsection
