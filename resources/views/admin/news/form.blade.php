@extends('admin.partial.app')

@if(!isset($data))
@section('title', 'Tambah Berita')
@else
@section('title', 'Edit Berita')
@endif

@section('content')
<div class="container-fluid" id="app">

    <!-- start page title -->
    <div class="row" style="padding: 5px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('announcement.index') }}">Berita</a></li>
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
                    <form id="submits" action="{{ !isset($data) ? route('news.store') : route('news.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-6 col-12 mb-3">
                                <label>Sub Judul</label>
                                <input type="text" class="form-control"  value="{{ isset($data) ? $data->sub_title : old('sub_title') }}" placeholder="Sub Judul" name="sub_title" />
                                @if ($errors->any())
                                    @foreach ($errors->getMessages() as $key => $val)
                                        @if($key == "sub_title")
                                            <div style="color: red;"> {{ $errors->first('sub_title') }}</div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <h4 class="card-title">Foto</h4>
                            <div class="d-flex mb-3" v-if="list_images.length > 0">
                                <div v-for="(item, index) in list_images" v-if="item.photo" style="margin-right: 10px !important">
                                    <img :src="item.photo_url ?? `/storage/upload/news-image/` + item" height="100px" width="100px">
                                    <div class="mt-3 d-flex align-items-center justify-content-center">
                                        <button class="btn btn-danger" type="button" @click="deleteImage(index)">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div id="my-dropzone" class="dropzone fallback">
                                </div>
                            </div>

                            <div v-for="(item, index) in list_images">
                                <input type="hidden" :name="`list_images[${index}][id]`" v-model="item.id">
                                <input type="hidden" :name="`list_images[${index}][url]`" v-model="item.image" v-if="item.photo_url">
                                <input type="hidden" :name="`list_images[${index}][url]`" v-model="item" v-else>
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
                                <a href="{{ route('announcement.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
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
    Dropzone.autoDiscover = false;
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
    $(document).ready(function () {
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
                    ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'FontSize', 'Bold', 'Italic', 'Underline', 'Center', 'Link', 'Unlink', 'Outdent', 'Indent', 'NumberedList', 'BulletedList', 'format' ]
                ],
                height: 200
            }
        );
    });
    

    

    var app = new Vue({
        el: '#app',
        data() {
            return {
                list_images: {!! $data->images ?? '[]' !!},
            }
        },
        methods: {
            deleteImage(index){
                this.list_images.splice(index, 1);
            },
        },
        mounted(){
            console.log(this.list_images)
            let _this = this;
            let myDropzone = new Dropzone("div#my-dropzone", {
                url: "/admin/upload",
                init: function () {
                    this.on('success', function(file, response){
                        console.log('dropzone on success');
                        console.log(response);

                        _this.list_images.push(response.data);
                    });
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
        }

    })
</script>
@endpush