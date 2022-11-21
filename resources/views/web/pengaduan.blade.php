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
                                        <form action="#" method="post" id="contact_form" class="waituk_contact-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="FIRST NAME *" id="con_fname"
                                                            name="con_fname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="LAST NAME *" id="con_lname"
                                                            name="con_lname" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="tel" placeholder="PHONE NUMBER" id="con_phone"
                                                            name="con_phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="EMAIL ADDRESS *" id="con_email"
                                                            name="con_email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="MESSAGE *" id="con_message"
                                                    name="con_message"></textarea>
                                            </div>
                                            <div class="btn-container">
                                                <button id="btn_sent" class="btn btn-primary btn-arrow">SEND
                                                    MESSAGE</button>
                                                <p id="error_message"> </p>
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
                                                    <li><span class="label-text">ENQUIRIE</span> <a
                                                            href="tel:+62 895 3859 03635">+62 895 3859 03635</a></li>
                                                    <li><span class="label-text">FAX</span> <a
                                                            href="tel:+62 895 3859 03635">+62 895 3859 03635</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="info-slot">
                                            <div class="icon"><span class="custom-icon-message"></span></div>
                                            <div class="text">
                                                <ul class="content-list contact-list">
                                                    <li><a href="mailto:support@roxine-online">support@roxine-online</a>
                                                    </li>
                                                    <li><a
                                                            href="mailto:info@roxine-online.com">info@roxine-online.com</a>
                                                    </li>
                                                    <li><a
                                                            href="mailto:help@roxine-online.com">help@roxine-online.com</a>
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