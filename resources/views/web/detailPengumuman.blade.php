@extends('web.layout.app')
@section('title', 'Detail Pengumuman')
@section('content')
<div>
    <!-- visual/banner of the page -->
    
    <section class="visual">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ $data->photo_url }}" height="100" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        {{-- <div class="visual-inner dark-overlay parallax" data-stellar-background-ratio="0.55">
            
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Profil Desa</h1>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container">
                <div class="heading bottom-space">
                    <h3 class="text-center">{{ $data->title }}</h3>
                    <h4 class="text-center">{{ $data->sub_title }}</h4>
                </div>
                <div class="description text-justify">
                    <p><?= $data->description ?></p>
                </div>
                
            </div>
        </section>
        {{-- <section class="content-block p-0 bg-gray-light">
            <div class="container-fluid">
                <div class="content-slot alternate-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-stretch img-wrap wow slideInLeft">
                                <img src="/assets/web/img/logoo.png" alt="logo" style="height: 670.867px !important;
                                width: 712px !important;
                                padding: 50px !important;">
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="text-wrap">
                                <h3>Identitas Desa</h3>
                                <table class="table">
                                    <tr>
                                        <td>Nama Desa </td>
                                        <td> : </td>
                                        <td> Keramas</td>
                                    </tr>
                                    <tr>
                                        <td>Kecamatan </td>
                                        <td> : </td>
                                        <td> Blahbatuh</td>
                                    </tr>
                                    <tr>
                                        <td>Kabupaten </td>
                                        <td> : </td>
                                        <td> Gianyar</td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos </td>
                                        <td> : </td>
                                        <td> 80581</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat </td>
                                        <td> : </td>
                                        <td> Jl. Maruti No. 1</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kepala Desa </td>
                                        <td> : </td>
                                        <td> I Gusti Putu Sarjana</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
    @endsection