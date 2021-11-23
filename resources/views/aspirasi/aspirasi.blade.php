@extends('layouts.template-front')
@section('content')
<div class="banner-image-aspirasi">
    <img src=" {{ asset('frontend/assets/images/header.jpg') }}" class="img-fluid " alt="">
</div>
<div class="container-fluid banner-blog ">
    <div class="container text-center">
        <h2>ASPIRASI</h2>
    </div>
</div>
<section class="container py-5 header__blog h-100 w-100">
    <div class="row justify-content-center">
    <div class="col-7">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif
    </div>
    <p style="line-height: 1.0cm">
        Untuk memberikan masukan, saran, maupun kritikan,anda dapat menuliskan pada kotak form di bawah ini.
        Wajib menuliskan identitas anda seperti Email, Nama, dan Pesan yang ingin di sampaikan.
        <br>
        Apabila ada pertanyaan seputar
        <b>Badan Semi Otonom Himpunan Mahasiswa Jurusan Teknologi Informasi.</b>
        Anda dapat menghubungi langsung kontak yang tersedia pada
        <a href="https://www.instagram.com/bso_hmjti/"target="_blank" rel="noopener noreferrer" class="text-reset"> media sosial kami </a>
    </p>
        </div>
        <div class="col-md-7">
                    <form action="{{ route('aspirasi.front.store') }}" method="post" class="form-vertical" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">E-mail<small class="text-danger">*</small></label>
                                    <input type="text" id="email" name="email" placeholder="Masukkan email..." class="form-control @error('email') is-invalid @enderror" >
                                    @error('email')
                                    <div class="invalid-feedback">
                                        <small class="help-block form-text text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama<small class="text-danger">*</small></label>
                                    <input type="text" id="name" name="nama" placeholder="Masukkan nama..." class="form-control @error('nama') is-invalid @enderror" >
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        <small class="help-block form-text text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="pesan" class=" form-label">Pesan</label>
                            <textarea type="text" id="pesan" name="pesan" rows="5" placeholder="Pesan yang ingin disampaikan" class="form-control @error('pesan') is-invalid @enderror" ></textarea>
                            @error('pesan')
                            <div class="invalid-feedback">
                                <small class="help-block form-text text-danger">{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                        <br>
                    <button type="submit" class="btn btn-outline-secondary btn-md">
                        <i class="fa fa-dot-circle-o"></i> Kirim
                    </button>
          </form>
    </form>
</section>

@endsection
