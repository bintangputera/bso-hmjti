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
                                <strong class="d-inline-block mb-2 text-info">{{ $item->category_name }}</strong>
                                <h3 class="mb-0">{{ $item->title }}</h3>
                                <div class="mb-1 text-muted mt-1" style="font-size: 14px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="16" height="16"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#979dac"><path d="M86,21.5c-15.83216,0 -28.66667,12.8345 -28.66667,28.66667c0,15.83216 12.8345,28.66667 28.66667,28.66667c15.83216,0 28.66667,-12.8345 28.66667,-28.66667c0,-15.83216 -12.8345,-28.66667 -28.66667,-28.66667zM63.14225,103.14681c-20.1885,4.472 -41.64225,14.27902 -41.64225,29.43652v17.91667h129v-17.91667c0,-15.1575 -21.45375,-24.96452 -41.64225,-29.43652c-5.23167,6.95883 -13.48375,11.51986 -22.85775,11.51986c-9.374,0 -17.62608,-4.56102 -22.85775,-11.51986z">
                                    </path></g></g></svg> {{ $item->author }} | <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="16" height="16"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#979dac"><path d="M50.16667,7.16667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v7.16667h-7.16667c-7.88333,0 -14.33333,6.45 -14.33333,14.33333v100.33333c0,7.88333 6.45,14.33333 14.33333,14.33333h100.33333c7.88333,0 14.33333,-6.45 14.33333,-14.33333v-100.33333c0,-7.88333 -6.45,-14.33333 -14.33333,-14.33333h-7.16667v-7.16667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v7.16667h-57.33333v-7.16667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM35.83333,57.33333h100.33333v71.66667c0,3.956 -3.21067,7.16667 -7.16667,7.16667h-86c-3.956,0 -7.16667,-3.21067 -7.16667,-7.16667z"></path></g></g></svg> {{ $item->updated_at }}</div>
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
            <h4>Blog Lainnya</h4>
            <ul>
                @forelse ($data_recent as $item)
                    <li><a href="">{{ $item->title }}</a></li>
                @empty

                @endforelse
            </ul>
            <h4 class="pt-4">Category</h4>
            <ul>
                @forelse ($data_banner as $item)
                <li><a href="{{ route('blog.front.tag',$item->category_name) }}">{{ $item->category_name }}</a></li>
                @empty
                <p class="text-danger text-center">Data Tidak ada</p>
                @endforelse
            </ul>
        </div>
    </div>

</section>

@endsection
