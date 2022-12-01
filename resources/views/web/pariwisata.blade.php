@extends('web.layout.app')
@section('title', 'Pariwisata')
@section('content')

<div>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Pariwisata</h1>
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
                    <h2>Pariwisata <span>Desa Keramas</span></h2>
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
                            </div>
                        </div>
                        <div class="col col-lg-6 bg-gray-light">
                            <div class="text-wrap">
                                <h3><strong>{{ $item->name }}</strong></h3>
                                <p><?= $item->description ?></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-stretch img-wrap wow slideInRight">
                                <img src="img/img-10.jpg" alt="images">
                            </div>
                        </div>
                        <div class="col-lg-6 bg-gray-light">
                            <div class="text-wrap">
                                <h3>Bring a perfectionist.</h3>
                                <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bg-stretch img-wrap wow slideInLeft">
                                <img src="img/img-11.jpg" alt="images">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-wrap">
                                <h3>Leave no stone unterned.</h3>
                                <p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. </p>
                                <p>See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating.</p>
                                <p>Decisively inquietude he advantages insensible at oh continuing unaffected of. </p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->
</div>
@endsection