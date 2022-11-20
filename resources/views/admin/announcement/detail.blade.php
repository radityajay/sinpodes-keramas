@extends('admin.partial.app')

@section('title', 'Detail Pengumuman')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding-left: 0px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pengumuman</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            @can(['annoncement.publish'])
                @if ($data->status == 'PENDING')
                    <a href="{{ route('announcement.accepted', $data->id) }}" class="btn btn-keramas btn-icon-text mb-2 mb-md-0">
                        <i class="fas fa-check"></i>
                        Terima
                    </a>
                    <a href="{{ route('announcement.reject', $data->id) }}" class="btn btn-danger btn-icon-text mb-2 mb-md-0">
                        <i class="fas fa-ban"></i>
                        Tolak
                    </a>
                @endif
            @endcan
            
        </div>
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
                                    <p><strong>Status</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    <span>
                                        <?php
                                            if ($data->status === 'ACCEPTED') {
                                                echo '<span style="text-align: center;"> <span style="padding:8px 20px !important;border-radius:10px;background-color: #f78c22;color: #fff;border: 2px solid #f78c22;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);position: absolute;bottom: 10px;font-size: 16px !important;" class="badge status-success">TERIMA</span> </span>';
                                            } elseif ($data->status === 'REJECT') {
                                                echo '<span style="text-align: center;"> <span style="padding:8px 20px !important;border-radius:10px;background-color: #ff5050;color: #fff;border: 2px solid #ff5050;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);position: absolute;bottom: 10px;font-size: 16px !important;" class="badge status-danger">TOLAK</span> </span>';
                                            } elseif ($data->status === 'PENDING') {
                                                echo '<span style="text-align: center;"> <span style="padding:8px 20px !important;border-radius:10px;background-color: #9a9a9a;color: #fff;border: 2px solid #9a9a9a;box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 8%);position: absolute;bottom: 10px; font-size: 16px !important;" class="badge status-warning">MENUNGGU</span> </span>';
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
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
                                    <p><strong>Judul</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ $data->title }}
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Sub Judul</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    {{ $data->sub_title }}
                                </div>
                            </div>
    
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-4 col-12">
                                    <p><strong>Deskripsi</strong></p>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-12">
                                    <?= $data->description ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-4 col-12">
                                <strong>Foto</strong>
                            </div>
                            <div class="col-lg-8 col-sm-8 col-12">
                                <img src="{{$data->photo_url}}" alt="Photo">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group" style="float: right">
                            <a href="{{ route('announcement.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
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