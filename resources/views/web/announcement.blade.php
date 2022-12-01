@extends('web.layout.app')
@section('title', 'Pengumuman')
@section('content')

<div>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Pengumuman </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block eighty-percent">
            <div class="container-fluid">
                <div class="row multiple-row">
                    @foreach ($data as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="post-grid reverse-grid">
                                <div class="img-block post-img">
                                    <a href="{{ route('announ.show', $item->id) }}"><img src="{{ $item->photo_url }}"
                                        class="img-tl" alt="images"></a>

                                    <time class="post-date"
                                        datetime="2016-10-10">{{ date('d M Y', strtotime($item->date)) }}</time>
                                </div>

                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0"><a
                                            href="">{{ $item->title }}</a></strong>
                                    <span class="content-sub-title">{{ $item->sub_title }}</span>
                                    <p><?= strlen($item->description) > 100 ? substr($item->description, 0, 100) . '...' : $item->description ?>
                                    </p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="{{ route('announ.show', $item->id) }}">Selengkapnya <span
                                                    class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                    </div>
                                </div>
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