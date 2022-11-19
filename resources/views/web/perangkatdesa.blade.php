@extends('web.layout.app')
@section('title', 'Perangkat Desa')
@section('content')
<div>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner visual-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="visual-text-large text-left visual-center">
                    <h1 class="visual-title visual-sub-title">Perangkat Desa</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="breadcrumb-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                            <li class="breadcrumb-item"><a href="index.html"> Elements </a></li>
                            <li class="breadcrumb-item active"> Animations </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container">
                <div class="heading bottom-space text-center">
                    <h2>Learn. <span>Acheive.</span> Admire</h2>
                </div>
                <div class="description text-center">
                    <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                </div>
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-md-4">
                        <figure class="team-box caption-fade-up top-l-space">
                            <div class="img-block">
                                {{-- <div :style="background-image: url(''. {{$item->photo_url}} .'')"></div> --}}
                                <img src="{{$item->photo_url}}" class="img-foto" alt="images description">
                            </div>
                            <figcaption class="team-des-v2">
                                <span class="sub">{{$item->jabatan}}</span>
                                <strong class="content-title name">{{$item->name}}</strong>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="inner-wrapper">
                    <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                    <h2 class="text-white">Thinking of joing a winning team?</h2>
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary">VIEW VACANCIES</a>
                    </div>
                </div>
            </div>
        </section>
        <aside class="content-block">
            <div class="container">
                <div class="logo-container">
                    <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                        <div class="slide-item">
                            <img src="img/logo-01.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="img/logo-02.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="img/logo-03.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="img/logo-04.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="img/logo-03.png" alt="images description">
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!--/main content wrapper -->
</div>
@endsection