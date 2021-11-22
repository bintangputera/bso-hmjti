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
                                <img src="{{ asset('img/blog/'.$data->images) }}">
                            </div>
                            <div class="form-group">
                                <label for="hf-judulblog" class="form-control-label">Judul Blog</label>
                                <input type="text" id="hf-judulblog" name="judulblog" placeholder="Masukkan Judul Blog..." value="{{ $data['title'] }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="hf-authorblog" class=" form-control-label">Author</label>
                                <input type="text" id="hf-authorblog" name="authorblog" placeholder="Masukkan Author..." value="{{ $data['author'] }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="hf-ktblog" class=" form-control-label">Kategori Blog</label>
                                <select class="form-control" name="ktblog" id="hf-ktblog" disabled="true">
                                    @forelse ($category as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->category_name ) }}</option>
                                    @empty
                                    <p class="text-warning">Tidak ada data</p>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hf-ktblog1" class=" form-control-label">Konten Blog</label>
                                <textarea id="summernote" name="kontenblog" class="form-control" readonly disabled="true">{{$data->content}}</textarea>
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm">
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
