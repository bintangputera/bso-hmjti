@extends('layouts.template')

@section('title', ucwords(Request::segment(2)))

@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{ ucwords(str_replace('-',' ',Request::segment(1))) }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-end">
                    <div class="page-title">
                        <ol class="breadcrumb text-end">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class=""><a href="{{ route('category-division.index') }}">{{ ucwords(str_replace('-',' ',Request::segment(1))) }}</a> </li>
                            <li class="active">{{ ucwords(str_replace('-',' ',Request::segment(3))) }}</li>
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
                        <form action="{{ route('structure-division.store') }}" method="post" class="form-vertical" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="hf-nama" class="form-control-label">Nama Pengurus</label>
                                <input type="text" id="hf-nama" name="nama" placeholder="Masukkan Nama..." class="form-control @error('nama') is-invalid @enderror" >
                                @error('nama')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-posisi" class="form-control-label">Posisi Pengurus</label>
                                <input type="text" id="hf-posisi" name="posisi" placeholder="Masukkan Posisi..." class="form-control @error('posisi') is-invalid @enderror" >
                                @error('posisi')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-divisi" class="form-control-label">Divisi</label>
                                <select class="form-control" name="divisi" id="hf-divisi">
                                    @forelse ($category_divisi as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->divisi_name ) }}</option>
                                    @empty
                                    <p class="text-warning">Tidak ada data</p>
                                    @endforelse
                                </select>
                                @error('divisi')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-foto" class="form-control-label">Foto Pengurus</label>
                                <input type="file" id="hf-foto" name="foto" class="form-control @error('foto') is-invalid @enderror" required>
                                @error('foto')
                                <div class="invalid-feedback">
                                    <small class="help-block form-text text-danger">{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="hf-periode" class="form-control-label">Periode</label>
                                <select class="form-control" name="periode" id="hf-divisi">
                                    @forelse ($periode as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->periode ) }}</option>
                                    @empty
                                    <p class="text-warning">Tidak ada data</p>
                                    @endforelse
                                </select>
                                @error('periode')
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
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#summernote').summernote();
    });
</script>

@endpush
