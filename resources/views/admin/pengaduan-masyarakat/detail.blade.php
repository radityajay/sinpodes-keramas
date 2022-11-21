@extends('admin.partial.app')

@section('title', 'Pengaduan Masyarakat')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding-left: 0px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengaduan Masyarakat</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-md-2">
            @can(['news.publish'])
                @if ($data->status == 'PENDING')
                    <a href="{{ route('news.accepted', $data->id) }}" class="btn btn-keramas btn-icon-text mb-2 mb-md-0">
                        <i class="fas fa-check"></i>
                        Terima
                    </a>
                    <a href="{{ route('news.reject', $data->id) }}" class="btn btn-danger btn-icon-text mb-2 mb-md-0">
                        <i class="fas fa-ban"></i>
                        Tolak
                    </a>
                @endif
            @endcan
            
        </div> --}}
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-9">
                        <div class="my-3">
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Tanggal</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ date('d M Y', strtotime($data->date))}}
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Nama Lengkap</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ $data->first_name + ' ' + $data->last_name }}
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Email</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ $data->email }}
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>No. Telefone</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ $data->phone_number }}
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Pesan</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    <?= $data->message ?>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row mb-4">
                            <div class="col-lg-4 col-sm-4 col-12">
                                <strong>Foto</strong>
                            </div>
                            <div class="col-lg-8 col-sm-8 col-12">
                                <img src="{{$data->photo_url}}" alt="Photo">
                            </div>
                        </div> --}}

                    </div>
                    <div class="col-md-12">
                        <div class="form-group" style="float: right">
                            <a href="{{ route('news.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
                            {{-- <button type="submit" class="btn btn-keramas mr-2"><i class="ri-save-line"></i> Simpan</button> --}}
                        </div>
                    </div>
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
</script>
@endpush