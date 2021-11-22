@extends('layouts.template')

@section('title', ucwords(Request::segment(2)))

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/lib/datatable/dataTables.bootstrap.min.css') }}">
@endpush
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
                                <li class="active">{{ ucwords(str_replace('-',' ',Request::segment(2))) }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
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
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aspirasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ ucwords($item->name ) }}</td>
                                            <td>{{ ucwords($item->email ) }}</td>
                                            <td>{{ ucwords($item->aspirasi ) }}</td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">Tidak ada data</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-modal')

@endsection
@push('js')
<script src="{{ asset('backend/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/jszip.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/init/datatables-init.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
  } );
</script>

@endpush
