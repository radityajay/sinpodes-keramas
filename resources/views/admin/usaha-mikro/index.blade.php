@extends('admin.partial.app')

@section('title', 'UsahaMikro')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding-left: 0px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UsahaMikro</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            <a href="{{ route('usaha-mikro.create') }}" class="btn btn-keramas btn-icon-text mb-2 mb-md-0">
                <i class="fas fa-plus"></i>
                Tambah UsahaMikro
            </a>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
@endsection

@push('scripts')
<script type="text/javascript">
    <?php
    if (session()->has('success')) {
        $message = session()->get('success');
        echo "swal(
            'Success',
            '<strong>Success! </strong>" . $message . "',
            'success');";
    }
    if (session()->has('error')) {
        $message = session()->get('error');
        echo "swal(
            'error',
            '<strong>Error! </strong>" . $message . "',
            'error');";
    }
    ?>
    $(document).ready(function() {
        let $dtSearch = $('#formSearch');
        dataTable = $("#datatable").DataTable({
            ajax: "{{ route('usaha-mikro.index') }}?type=datatable",
            processing: true,
            autoWidth: false,
            serverSide: true,
            order: [
                [1, "asc"]
            ],
            bFilter: true,
            bSort: false,
            columns: [{
                    data: "id",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "date",
                    name: "date"
                },
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false
                },
            ]
        });
    });
</script>
@endpush