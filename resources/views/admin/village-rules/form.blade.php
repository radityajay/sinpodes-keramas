@extends('admin.partial.app')

@if(!isset($data))
@section('title', 'Tambah Peraturan Desa')
@else
@section('title', 'Edit Peraturan Desa')
@endif

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding: 5px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('announcement.index') }}">Peraturan Desa</a></li>
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
                    <form id="submits" action="{{ !isset($data) ? route('village-rules.store') : route('village-rules.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($data)
                        @method('PUT')
                        @endisset
                        
                        <div class="row">
                            <div class="col-md-6 col-12 mb-3">
                                    <label>Judul</label>
                                    <input type="text" class="form-control"  value="{{ isset($data) ? $data->title : old('title') }}" placeholder="Judul" name="title" />
                                    @if ($errors->any())
                                        @foreach ($errors->getMessages() as $key => $val)
                                            @if($key == "title")
                                                <div style="color: red;"> {{ $errors->first('title') }}</div>
                                            @endif
                                        @endforeach
                                    @endif
                            </div>
                            {{-- <div class="col-md-6 col-12 mb-3">
                                <label>Sub Judul</label>
                                <input type="text" class="form-control"  value="{{ isset($data) ? $data->sub_title : old('sub_title') }}" placeholder="Sub Judul" name="sub_title" />
                                @if ($errors->any())
                                    @foreach ($errors->getMessages() as $key => $val)
                                        @if($key == "sub_title")
                                            <div style="color: red;"> {{ $errors->first('sub_title') }}</div>
                                        @endif
                                    @endforeach
                                @endif
                            </div> --}}
                            <div class="col-md-6 col-12 mb-3">
                                <label>File</label>
                                <input type="file" name="file" class="dropify" data-height="180" data-allowed-file-extensions="pdf" {!!isset($data->file) ? "data-default-file='{$data->file_url}'" : ''!!} accept="pdf"/>
                                @if ($errors->any())
                                    @foreach ($errors->getMessages() as $key => $val)
                                        @if($key == "file")
                                            <div style="color: red;"> {{ $errors->first('file') }}</div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="mb-3 mt-3">
                                <label>Deskripsi</label>
                                <textarea class="form-control" id="ckeditor" name="description" cols="30" rows="3">{{ isset($data) ? $data->description : old('description') }}</textarea>
                                @if ($errors->any())
                                    @foreach ($errors->getMessages() as $key => $val)
                                        @if($key == "description")
                                            <div style="color: red;"> {{ $errors->first('description') }}</div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group" style="float: right">
                                <a href="{{ route('village-rules.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
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

    CKEDITOR.replace(
        'ckeditor', {
            toolbar: [
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'FontSize', 'Bold', 'Italic', 'Underline', 'Center', 'Link', 'Unlink', 'Outdent', 'Indent', 'NumberedList', 'BulletedList', 'format', 'Image', ]
            ],
            height: 200
        }
    );
</script>
@endpush