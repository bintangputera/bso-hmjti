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
            <div class="row">
                @forelse ($data as $item)
                <div class="col-lg-6">
                    <div class="card shadow-sm mb-4" style="border: none" >
                        <img src="{{ asset('img/blog/'.$item->images) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2">{{ $item->category_name }}</strong>
                                <h3 class="mb-0">{{ $item->title }}</h3>
                                <div class="mb-1 text-muted mt-1" style="font-size: 14px;">{{ $item->author }} | {{ $item->updated_at }}</div>
                                <p class="card-text mb-4">
                                    {!! substr($item->content, 0, 150)."[..]" !!}
                                </p>
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route('blog.front.detail',$item->slug) }}" class="btn btn-primary">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <p class="text-danger text-center">Data Tidak ada</p>
                @endforelse
            </div>

            <div class="d-flex justify-content-start">
                {!! $data->links() !!}
            </div>
        </div>

        <div class="col-lg-4 header__recent p-4">
            <h4>Recent Blog</h4>
            <ul>
                @forelse ($data_recent as $item)
                    <li><a href="">{{ $item->title }}</a></li>
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
