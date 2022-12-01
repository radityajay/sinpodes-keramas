@extends('web.layout.app')
@section('title', 'Home')
@section('content')
    <div>
        <!-- visual/banner of the page -->
        <!-- visual/banner of the page -->
        <div class="banner banner-home">
            <!-- revolution slider starts -->
            <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header"
                style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
                    <ul>
                        <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7"
                            data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0"
                            data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- main image for revolution slider -->
                            <img src="/assets/web/img/banner.jpg" alt="image description" data-bgposition="center center"
                                data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100"
                                data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                                data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover"
                                data-no-retina>
                            <div class="tp-caption tp-shape tp-shapewrapper" id="slide-1699-layer-10"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"from":"y:0;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="background-color:rgba(0, 0, 0, 0.57);">
                            </div>
                            <div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','middle','middle']" data-voffset="['145','100','10','20']"
                                data-width="['1200','960','720','540']" data-textalign="left"
                                data-fontsize="['30','28','24','20']" data-lineheight="['72','62','50','50']"
                                data-letterspacing="5" data-height="none" data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                                DESA KERAMAS
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/visual/banner of the page -->
        <!-- main content wrapper -->
        <div class="content-wrapper">
            <section class="content-block eighty-percent">
                <div class="container mb-5">
                    <div class="row multiple-row v-align-row">
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ route('profildesa.index') }}" data-title="Profil Desa">
                                <div class="col-wrap">
                                    <div class="ico-box bg-gray-light has-radius-medium">
                                        <div class="icon">
                                            <span class="custom-icon-pen-tool"><span class="sr-only">&amp;</span></span>
                                        </div>
                                        <h4 class="content-title">Tentang Desa</h4>
                                        {{-- <div class="des">
                                            <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="col-wrap">
                                <div class="ico-box bg-gray-light has-radius-medium">
                                    <div class="icon">
                                        <span class="custom-icon-vector"><span class="sr-only">&amp;</span></span>
                                    </div>
                                    <h4 class="content-title"><a href="#">Galeri</a></h4>
                                    {{-- <div class="des">
                                        <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="col-wrap">
                                <div class="ico-box bg-gray-light has-radius-medium">
                                    <div class="icon">
                                        <span class="custom-icon-font-design"><span class="sr-only">&amp;</span></span>
                                    </div>
                                    <h4 class="content-title"><a href="#">Wilayah Desa</a></h4>
                                    {{-- <div class="des">
                                        <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid py-5">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3>Berita</h3>
                        </div>
                        <div>
                            <a href="{{ route('berita.index') }}" style="color: black !important"><h6>Selengkapnya <span
                                class="fa fa-arrow-right"><span
                                    class="sr-only">&nbsp;</span></span></a></h6></a>
                        </div>
                    </div>
                    <div class="row multiple-row">
                        @foreach ($berita as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="col-wrap">
                                    <div class="post-grid reverse-grid">
                                        @if (isset($item->images))
                                            <div class="img-block post-img">
                                                @foreach ($item->images as $index => $value)
                                                    @if ($index == 0)
                                                        <a href="{{ route('berita.show', $item->id) }}"><img src="{{ $value->photo_url }}"
                                                                class="img-tl" alt="images"></a>
                                                    @endif
                                                @endforeach

                                                <time class="post-date"
                                                    datetime="2016-10-10">{{ date('d M Y', strtotime($item->date)) }}</time>
                                            </div>
                                        @endif

                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0"><a
                                                    href="{{ route('berita.show', $item->id) }}">{{ $item->title }}</a></strong>
                                            <span class="content-sub-title">{{ $item->sub_title }}</span>
                                            <p><?= strlen($item->description) > 100 ? substr($item->description, 0, 100) . '...' : $item->description ?>
                                            </p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="{{ route('berita.show', $item->id) }}">Selengkapnya <span
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
                <div class="container-fluid py-5">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3>Pengumuman</h3>
                        </div>
                        <div>
                            <a href="{{ route('announ.index') }}" style="color: black !important"><h6>Selengkapnya <span
                                class="fa fa-arrow-right"><span
                                    class="sr-only">&nbsp;</span></span></a></h6></a>
                        </div>
                    </div>
                    <div class="row multiple-row">
                        @foreach ($pengumuman as $item)
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
                                                    href="{{ route('announ.show', $item->id) }}">{{ $item->title }}</a></strong>
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
            <div class="content-wrapper">
                <section class="content-block ">
                    
                </section>
            </div>
        </div>
        <!--/main content wrapper -->
    </div>
@endsection
