@extends('admin.partial.app')

@if(!isset($data))
@section('title', 'Tambah User')
@else
@section('title', 'Edit User')
@endif

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row" style="padding: 5px;">
        <div class="col-md-10">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
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
                    <form id="submits" action="{{ !isset($data) ? route('user.store') : route('user.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($data)
                        @method('PUT')
                        @endisset
                        
                        <div class="form-group">
                            <label>Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" required name="name" value="{{isset($data) ? $data->name : old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Username <span class="text-red">*</span></label>
                            <input type="text" class="form-control" required name="username" value="{{isset($data) ? $data->username : old('username')}}">
                        </div>
                        <div class="form-group">
                            <label>Email <span class="text-red">*</span></label>
                            <input type="email" class="form-control" required name="email" value="{{isset($data) ? $data->email : old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Role <span class="text-red">*</span></label>
                            <select name="role_id" required class="form-control">
                                @foreach ($role as $item)
                                    @if (isset($data))
                                        <option value="{{$item->id}}" {{$data->role_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                    @else
                                        <option value="{{$item->id}}" {{old('role_id') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password <span class="text-red">*</span></label>
                            <input type="password" class="form-control" name="password">
                            @if (isset($data))
                                <small><i>*Leave blank if you don't want to change password</i></small>
                            @endif
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input ind-checkbox"
                                id="is_active"
                                name="is_active"
                                @if (isset($data))
                                    @if ($data->is_active == true)
                                        checked
                                    @endif
                                @endif
                                value="true">
                            <label class="custom-control-label align-middle" for="is_active">Active</label>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group" style="float: right">
                                <a href="{{ route('user.index') }}" class="btn btn-light"><i class="ri-arrow-left-line"></i> Kembali</a>
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