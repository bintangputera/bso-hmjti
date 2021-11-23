@extends('layouts.template-front')
@section('content')
<div class="banner-image-blog">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="">
</div>
<div class="container-fluid banner-blog ">
    <div class="container text-center">
        <h2>Struktur Kepengurusan</h2>
        <p class="mt-4">{{ $periode->periode }}</p>
    </div>
</div>
<section class="container py-5 header__struktur h-100 w-100">
    @foreach ($kategori as $item)
        <div class="p-5">
            <h2 class="text-center">{{ $item->divisi_name }}</h2>
            <h3 class="text-center">{{ $item->desc }}</h3>
        </div>

            @php
                $divisi = \App\Models\StructureDivisi::where('category_divisi_id', $item->id)->get();

            @endphp
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/pengurus/'.$divisi[0]->images) }}" class="img-fluid w-50" alt="Ketua BSO HMJTI">
                    </div>
                    <div class="text-center p-3">
                        <h4>{{ $divisi[0]->name }}</h4>
                        <p>{{ $divisi[0]->position }}</p>
                    </div>
                </div>
            </div>
            @php
                $divisi_anggota = \App\Models\StructureDivisi::where('category_divisi_id', $item->id)->get();
                $count = count($divisi_anggota);
            @endphp
                <div class="row d-flex justify-content-center">
                @for ($i = 1; $i < $count; $i++)
                    <div class="col-lg-3 col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/pengurus/'.$divisi_anggota[$i]->images) }}" class="img-fluid w-100" alt="Ketua BSO HMJTI">
                        </div>
                        <div class="text-center p-3">
                            <h4>{{ $divisi_anggota[$i]->name }}</h4>
                            <p>{{ $divisi_anggota[$i]->position }}</p>
                        </div>
                    </div>
                    @endfor
                </div>
            {{-- @foreach ($divisi as $data)
            <ul>
                <li> <img src="{{ asset('img/pengurus/'.$data->images) }}" class="" width="100" alt="Ketua BSO HMJTI"></li>
                <li>{{ $data->name }}</li>
                <li>{{ $data->position }}</li>
            </ul>
            @endforeach --}}


    @endforeach
</section>
@endsection
