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
                        <form action="" method="post" class="form-vertical" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <img src="{{ asset('img/content/'.$data->banner) }}" height="200">
                            </div>
                            <div class="form-group">
                                <label for="hf-visi" class="form-control-label">Visi</label>
                                <input type="text" id="hf-visi" name="visi" value="{{ $data->visi }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="hf-ktblog" class=" form-control-label">Misi</label>
                                <textarea id="summernote" name="misi" class="form-control" readonly disabled="true">{{$data->misi}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="hf-motto" class="form-control-label">Motto</label>
                                <input type="text" id="hf-motto" name="motto" value="{{ $data->moto }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="hf-desc" class="form-control-label">Deskripsi</label>
                                <input type="text" id="hf-desc" name="desc" value="{{ $data->desc }}" class="form-control" readonly>
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('content.index') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Kembali
                        </a>
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
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#summernote').summernote('disable');
    });
</script>

@endpush
