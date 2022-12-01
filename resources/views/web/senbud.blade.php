@extends('web.layout.app')
@section('title', 'Seni Budaya')
@section('content')

<div>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Seni Budaya</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container text-center">
                <div class="heading bottom-space">
                    <h2>Seni dan Budaya <span>Desa Keramas.</span></h2>
                </div>
                {{-- <div class="description">
                    <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                </div> --}}
            </div>
        </section>
        <section class="content-block p-0">
            <div class="container-fluid">
                <div class="content-slot alternate-block">
                    @foreach ($data as $key => $item)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-stretch img-wrap wow @if ($key == 0)
                            slideInLeft
                            @else
                            slideInRight
                            @endif">
                                <img src="{{ $item->photo_url }}" alt="images">
                            </div>085940475514
                        </div>
                        <div class="col col-lg-6 bg-gray-light">
                            <div class="text-wrap">
                                <h3><strong>{{ $item->name }}</strong></h3>
                                <p><?= $item->description ?></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->
</div>
@endsection