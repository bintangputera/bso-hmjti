@extends('layouts.template')
@section('title', ucwords(Request::segment(2)))
@push('css')
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}

@endpush
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ ucwords(str_replace('-',' ',Request::segment(2))) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-end">
                    <div class="page-title">
                        <ol class="breadcrumb text-end">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class=""><a href="{{ route('category-division.index') }}">{{ ucwords(str_replace('-',' ',Request::segment(2))) }}</a> </li>
                            <li class="active">{{ ucwords(str_replace('-',' ',Request::segment(4))) }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('content.update', $data->id) }}" method="post" class="form-vertical" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <img src="{{ asset('img/content/'.$data->banner)}}" height="300"/>
                            </div>
                            <div class="form-group">
                                <input type="hidden" value="{{ $data->banner }}" name="old_banner">
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-ktblog" class=" form-control-label">Thumbnail</label>
                                <input type="file" id="hf-banner" name="banner" class="form-control @error('banner') is-invalid @enderror">
                                @error('banner')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-visi" class="form-control-label">Visi</label>
                                <input type="text" id="hf-visi" name="visi" placeholder="Masukkan Visi" value="{{ $data->visi }}" class="form-control @error('visi') is-invalid @enderror" >
                                @error('visi')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-misi" class=" form-control-label">Misi</label>
                                <textarea id="misi" name="misi" class="form-control @error('misi') is-invalid @enderror">{{ $data->misi }}</textarea>
                                @error('misi')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-motto" class="form-control-label">Motto</label>
                                <input type="text" id="hf-motto" name="motto" placeholder="Masukkan Motto" value="{{ $data->moto }}" class="form-control @error('motto') is-invalid @enderror" >
                                @error('motto')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-description" class="form-control-label">Deskripsi</label>
                                <input type="text" id="hf-description" name="desc" placeholder="Masukkan Description" value="{{ $data->desc }}" class="form-control @error('desc') is-invalid @enderror" >
                                @error('desc')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#misi').summernote();
    });
</script>

@endpush
