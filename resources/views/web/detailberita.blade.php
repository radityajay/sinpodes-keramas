@extends('web.layout.app')
@section('title', 'Detail Berita')
@section('content')
<div>
    <!-- visual/banner of the page -->
    
    <section class="visual">
        <div id="carouselExampleControls" class="carousel slide dark-overlay" data-ride="carousel">
            <div class="carousel-inner">
                {{-- <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div> --}}
                @foreach ($data->images as $item)
                @if ($item->photo)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{ $item->photo_url }}" sizes="sm:100vw md:640px lg:1024px xl:1600px" class="d-block w-100" alt="...">
                </div>
                @endif
                @endforeach
                
                {{-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
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