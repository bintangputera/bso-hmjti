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
                        <form action="{{ route('periode.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-ktblog" class=" form-control-label">Periode</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="hf-periode" name="periode" placeholder="Masukkan Periode..." class="form-control @error('periode') is-invalid @enderror" >
                                    @error('periode')
                                    <div class="invalid-feedback">
                                        <small class="help-block form-text text-danger">{{$message}}</small>
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
