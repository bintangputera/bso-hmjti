@extends('layouts.template')
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
                        <form action="{{ route('category-division.update',$data->id) }}" method="post" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-ktdivisi" class=" form-control-label">Kategori Divisi</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="hf-ktdivisi" name="ktdivisi" placeholder="Masukkan Kategori Divisi..." class="form-control @error('ktdivisi') is-invalid @enderror" value="{{ $data->divisi_name }}">
                                    @error('ktdivisi')
                                    <div class="invalid-feedback">
                                        <small class="help-block form-text text-danger">{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group mt-4">
                                <div class="col col-md-3"><label for="hf-desc" class=" form-control-label">Deskripsi</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hf-desc" name="desc" placeholder="Masukkan Deskripsi Singkat..." class="form-control @error('desc') is-invalid @enderror" value="{{ $data->desc }}">
                                    @error('desc')
                                    <div class="invalid-feedback">
                                        <small class="help-block form-text text-danger" >{{$message}}</small>
                                    </div>
                                    @enderror
                                </div>
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
