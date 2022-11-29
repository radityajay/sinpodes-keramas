@extends('admin.partial.app')

@if(!isset($data))
@section('title', 'Tambah Lpm')
@else
@section('title', 'Edit Lpm')
@endif

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding: 5px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lpm-apparature.index') }}">Lpm</a></li>
                    @if(!isset($data))
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    @else
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    @endif
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form id="submits" action="{{ !isset($data) ? route('lpm-apparature.store') : route('lpm-apparature.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($data)
                        @method('PUT')
                        @endisset
                        
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control"  value="{{ isset($data) ? $data->name : old('name') }}" placeholder="Nama" name="name" />
                                    @if ($errors->any())
                                        @foreach ($errors->getMessages() as $key => $val)
                                            @if($key == "name")
                                                <div style="color: red;"> {{ $errors->first('name') }}</div>
                                            @endif
                                        @endforeach
                                    @endif
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <label>Jabatan</label>
                                    <input type="text" class="form-control"  value="{{ isset($data) ? $data->jabatan : old('jabatan') }}" placeholder="Kepala Desa" name="jabatan" />
                                    @if ($errors->any())
                                        @foreach ($errors->getMessages() as $key => $val)
                                            @if($key == "jabatan")
                                                <div style="color: red;"> {{ $errors->first('jabatan') }}</div>
                                            @endif
                                        @endforeach
                                    @endif
                            </div>
                            <div class="mb-3 mt-3">
                                <label>Foto</label>
                                <input type="file" name="photo" class="dropify" data-height="180" data-max-file-size="3M" data-allowed-file-extensions="jpg png gif jpeg" {!!isset($data->photo) ? "data-default-file='{$data->photo_url}'" : ''!!} accept="image/*"/>
                                @if ($errors->any())
                                    @foreach ($errors->getMessages() as $key => $val)
                                        @if($key == "photo")
                                            <div style="color: red;"> {{ $errors->first('photo') }}</div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group" style="float: right">
                                <a href="{{ route('lpm-apparature.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
                                <button type="submit" class="btn btn-keramas mr-2"><i class="ri-save-line"></i> Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>
@endsection

@push('scripts')
<script>
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

    $('.dropify').dropify({
        messages: {
            'default': 'Drop a file here or click',
            'replace': 'Drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
</script>
@endpush