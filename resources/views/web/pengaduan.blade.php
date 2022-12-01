@extends('web.layout.app')
@section('title', 'Pengaduan')
@section('content')

<div>
    <!-- visual/banner of the page -->
                <section class="visual visual-sub visual-no-bg">
                    <div class="visual-inner no-overlay bg-gray-light">
                        <div class="centered">
                            <div class="container">
                                <div class="visual-text visual-center">
                                    <h1 class="visual-title visual-sub-title">Pengaduan Masyarakat</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/visual/banner of the page -->
                <!-- main content wrapper -->
                <div class="content-wrapper">
                    <section class="content-block pb-0">
                        <div class="container">
                            <div class="contact-container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- contact form -->
                                        <form id="submits" action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="FIRST NAME *" id="con_fname"
                                                            name="first_name" class="form-control">
                                                            @if ($errors->any())
                                                                @foreach ($errors->getMessages() as $key => $val)
                                                                    @if($key == "first_name")
                                                                        <div style="color: red;"> {{ $errors->first('first_name') }}</div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="LAST NAME *" id="con_lname"
                                                            name="last_name" class="form-control">
                                                            @if ($errors->any())
                                                                @foreach ($errors->getMessages() as $key => $val)
                                                                    @if($key == "last_name")
                                                                        <div style="color: red;"> {{ $errors->first('last_name') }}</div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="tel" placeholder="PHONE NUMBER" id="con_phone"
                                                            name="phone_number" class="form-control">
                                                            @if ($errors->any())
                                                                @foreach ($errors->getMessages() as $key => $val)
                                                                    @if($key == "phone_number")
                                                                        <div style="color: red;"> {{ $errors->first('phone_number') }}</div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="EMAIL ADDRESS *" id="con_email"
                                                            name="email" class="form-control">
                                                            @if ($errors->any())
                                                                @foreach ($errors->getMessages() as $key => $val)
                                                                    @if($key == "email")
                                                                        <div style="color: red;"> {{ $errors->first('email') }}</div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="MESSAGE *" id="con_message"
                                                    name="message"></textarea>
                                                    @if ($errors->any())
                                                        @foreach ($errors->getMessages() as $key => $val)
                                                            @if($key == "message")
                                                                <div style="color: red;"> {{ $errors->first('message') }}</div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                            </div>
                                            <div class="btn-container">
                                                <button type="submit" class="btn btn-primary btn-arrow">SEND
                                                    MESSAGE</button>
                                                {{-- <p id="error_message"> </p> --}}
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                                        <div class="info-slot">
                                            <div class="icon"><span class="custom-icon-map-marker"></span></div>
                                            <div class="text">
                                                <address>Jl. Maruti No.1, Keramas,
                                                    <br>Kec. Blahbatuh, Kabupaten Gianyar,
                                                    <br>Bali 80581
                                                </address>
                                            </div>
                                        </div>
                                        <div class="info-slot">
                                            <div class="icon"><span class="custom-icon-headset"></span></div>
                                            <div class="text">
                                                <ul class="content-list contact-list">
                                                    <li><span class="label-text">HELPLINE</span> <a
                                                            href="tel:+62 895 3859 03635">+62 895 3859 03635</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-slot">
                                            <div class="icon"><span class="custom-icon-message"></span></div>
                                            <div class="text">
                                                <ul class="content-list contact-list">
                                                    <li><a href="mailto:support@roxine-online">kantorkepaladesakeramas@gmail.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--/main content wrapper -->
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